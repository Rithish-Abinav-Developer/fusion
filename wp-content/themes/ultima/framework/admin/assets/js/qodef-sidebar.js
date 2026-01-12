(function ($) {
    "use strict";

    var QodeSidebar = function () {
    
        this.is_block_widget = ! $( '.widget-liquid-right' ).length;
        this.widget_wrap = $('.widget-liquid-right, .block-editor-writing-flow');
        this.widget_area = $('#widgets-right');
        this.widget_add  = $('#qode-add-widget');
    
        this.create_form();
        if( this.is_block_widget ) {
            this.add_del_button();
        } else {
            this.add_del_button_legacy();
        }
        this.bind_events();
    };

    QodeSidebar.prototype = {

        create_form: function () {
            this.widget_wrap.append(this.widget_add.html());
            this.widget_name = this.widget_wrap.find('input[name="qode-sidebar-widgets"]');
            this.nonce = this.widget_wrap.find('input[name="qode-delete-sidebar"]').val();
        },
    
        add_del_button_legacy: function () {
            this.widget_area.find('.sidebar-qode-custom').append('<span class="qode-delete-button"></span>');
        },
    
        add_del_button: function() {
            var wrapper = this.widget_wrap.find('[data-widget-area-id*="qode-custom-sidebar-"]');
            if( wrapper.length ) {
                wrapper.parents( '.wp-block-widget-area' ).parent().append( '<span class="qode-delete-button"></span>' );
            }
            var $gutenbergWidgetsArea = $( '.block-editor-writing-flow' );
            if ( $gutenbergWidgetsArea.length ) {
                var customSidebars = typeof qodef === 'object' && typeof qodef.customSidebars !== 'undefined' ? qodef.customSidebars : [];
                if ( customSidebars.length ) {
                    for ( const customSidebar of customSidebars ) {
                        // Timeout is set in order to panel loaded
                        setTimeout(
                            function () {
                                var customWidgetArea = $gutenbergWidgetsArea.find( '[data-widget-area-id="' + customSidebar.toLowerCase().replaceAll(' ', '-') + '"]' );
                                if ( customWidgetArea.length ) {
                                    customWidgetArea.parents( '.components-panel__body' ).children( '.components-panel__body-title' ).append( '<span class="qode-delete-button"></span>' );
                                }
                            },
                            3000
                        );
                    }
                }
            }
        },

        bind_events: function () {
            this.widget_wrap.on('click', '.qode-delete-button', $.proxy(this.delete_sidebar, this));
        },

        delete_sidebar: function (e) {
            var widget = $(e.currentTarget).parents('.widgets-holder-wrap:eq(0)'),
                title = widget.find('.sidebar-name h2'),
                spinner = title.find('.spinner'),
                widget_name,
                obj = this;
    
            if( this.is_block_widget ) {
                widget      = $( e.currentTarget ).parents( '.block-editor-block-list__block' );
                var $sidebarName = widget.find( '.components-panel__body-title' );
                widget_name  = $.trim( $sidebarName.text() );
            } else {
                widget = $(e.currentTarget).parents('.widgets-holder-wrap:eq(0)');
                title = widget.find('.sidebar-name h2');
                widget_name = $.trim(title.text());
            }

            var r = confirm("Are you sure you want to delete widget area?");
            if (r === true) {
                $.ajax({
                    type: "POST",
                    url: window.ajaxurl,
                    data: {
                        action: 'qode_ajax_delete_custom_sidebar',
                        name: widget_name,
                        _wpnonce: obj.nonce
                    },

                    beforeSend: function () {
                        spinner.addClass('activate_spinner');
                    },
                    success: function (response) {
                        if (response === 'sidebar-deleted') {
                            widget.slideUp(200, function () {
                                $('.widget-control-remove', widget).trigger('click'); //delete all widgets inside
                                widget.remove();
                                wpWidgets.saveOrder();
                            });
                        }
                    }
                });
            }

        }
    };

    $(function () {
        new QodeSidebar();
    });

})(jQuery);	 