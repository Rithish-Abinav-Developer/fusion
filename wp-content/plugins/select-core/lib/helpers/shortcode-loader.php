<?php
namespace UltimaQodef\Modules\Shortcodes\Lib;

use UltimaQodef\Modules\Shortcodes\ProductListCarousel\ProductListCarousel;
use UltimaQodef\Modules\Shortcodes\Accordion\Accordion;
use UltimaQodef\Modules\Shortcodes\AccordionTab\AccordionTab;
use UltimaQodef\Modules\Shortcodes\Blockquote\Blockquote;
use UltimaQodef\Modules\Shortcodes\BlogList\BlogList;
use UltimaQodef\Modules\Shortcodes\Button\Button;
use UltimaQodef\Modules\Shortcodes\CallToAction\CallToAction;
use UltimaQodef\Modules\Shortcodes\Counter\Countdown;
use UltimaQodef\Modules\Shortcodes\Counter\Counter;
use UltimaQodef\Modules\Shortcodes\CustomFont\CustomFont;
use UltimaQodef\Modules\Shortcodes\Dropcaps\Dropcaps;
use UltimaQodef\Modules\Shortcodes\ElementsHolder\ElementsHolder;
use UltimaQodef\Modules\Shortcodes\ElementsHolderItem\ElementsHolderItem;
use UltimaQodef\Modules\Shortcodes\GoogleMap\GoogleMap;
use UltimaQodef\Modules\Shortcodes\Highlight\Highlight;
use UltimaQodef\Modules\Shortcodes\Icon\Icon;
use UltimaQodef\Modules\Shortcodes\IconListItem\IconListItem;
use UltimaQodef\Modules\Shortcodes\IconWithText\IconWithText;
use UltimaQodef\Modules\Shortcodes\ImageGallery\ImageGallery;
use UltimaQodef\Modules\Shortcodes\Message\Message;
use UltimaQodef\Modules\Shortcodes\OrderedList\OrderedList;
use UltimaQodef\Modules\Shortcodes\PieCharts\PieChartBasic\PieChartBasic;
use UltimaQodef\Modules\Shortcodes\PieCharts\PieChartDoughnut\PieChartDoughnut;
use UltimaQodef\Modules\Shortcodes\PieCharts\PieChartDoughnut\PieChartPie;
use UltimaQodef\Modules\Shortcodes\PieCharts\PieChartWithIcon\PieChartWithIcon;
use UltimaQodef\Modules\Shortcodes\PricingTables\PricingTables;
use UltimaQodef\Modules\Shortcodes\PricingTable\PricingTable;
use UltimaQodef\Modules\Shortcodes\ProductList\ProductList;
use UltimaQodef\Modules\Shortcodes\ProgressBar\ProgressBar;
use UltimaQodef\Modules\Shortcodes\RestaurantItem\RestaurantItem;
use UltimaQodef\Modules\Shortcodes\RestaurantMenu\RestaurantMenu;
use UltimaQodef\Modules\Shortcodes\Separator\Separator;
use UltimaQodef\Modules\Shortcodes\SocialShare\SocialShare;
use UltimaQodef\Modules\Shortcodes\Tabs\Tabs;
use UltimaQodef\Modules\Shortcodes\Tab\Tab;
use UltimaQodef\Modules\Shortcodes\Team\Team;
use UltimaQodef\Modules\Shortcodes\TeamSlider\TeamSlider;
use UltimaQodef\Modules\Shortcodes\TeamSliderItem\TeamSliderItem;
use UltimaQodef\Modules\Shortcodes\UnorderedList\UnorderedList;
use UltimaQodef\Modules\Shortcodes\VideoButton\VideoButton;
use UltimaQodef\Modules\Shortcodes\CoverBoxes\CoverBoxes;
use UltimaQodef\Modules\Shortcodes\UnderlineIconBox\UnderlineIconBox;
use UltimaQodef\Modules\Shortcodes\PricingInfo\PricingInfo;
use UltimaQodef\Modules\Shortcodes\ServiceTable\ServiceTable;
use UltimaQodef\Modules\Shortcodes\ProcessHolder\ProcessHolder;
use UltimaQodef\Modules\Shortcodes\ProcessItem\ProcessItem;
use UltimaQodef\Modules\Shortcodes\InfoBox\InfoBox;
use UltimaQodef\Modules\Shortcodes\InteractiveBanner\InteractiveBanner;
use UltimaQodef\Modules\Shortcodes\Clients\Clients;
use UltimaQodef\Modules\Shortcodes\Client\Client;
use UltimaQodef\Modules\Shortcodes\FullscreenSections\FullscreenSections;
use UltimaQodef\Modules\Shortcodes\FullscreenSectionsItem\FullscreenSectionsItem;
use UltimaQodef\Modules\Shortcodes\FullscreenSectionsItemSlide\FullscreenSectionsItemSlide;

/**
 * Class ShortcodeLoader
 */
class ShortcodeLoader {
    /**
     * @var private instance of current class
     */
    private static $instance;
    /**
     * @var array
     */
    private $loadedShortcodes = array();

    /**
     * Private constuct because of Singletone
     */
    private function __construct() {
    }

    /**
     * Returns current instance of class
     * @return ShortcodeLoader
     */
    public static function getInstance() {
        if(self::$instance == null) {
            return new self;
        }

        return self::$instance;
    }

    /**
     * Adds new shortcode. Object that it takes must implement ShortcodeInterface
     *
     * @param ShortcodeInterface $shortcode
     */
    private function addShortcode(ShortcodeInterface $shortcode) {
        if(!array_key_exists($shortcode->getBase(), $this->loadedShortcodes)) {
            $this->loadedShortcodes[$shortcode->getBase()] = $shortcode;
        }
    }

    /**
     * Adds all shortcodes.
     *
     * @see ShortcodeLoader::addShortcode()
     */
    private function addShortcodes() {
        $this->addShortcode(new Accordion());
        $this->addShortcode(new AccordionTab());
        $this->addShortcode(new Blockquote());
        $this->addShortcode(new BlogList());
        $this->addShortcode(new Button());
        $this->addShortcode(new CallToAction());
        $this->addShortcode(new Counter());
        $this->addShortcode(new Countdown());
        $this->addShortcode(new CustomFont());
        $this->addShortcode(new Dropcaps());
        $this->addShortcode(new ElementsHolder());
        $this->addShortcode(new ElementsHolderItem());
        $this->addShortcode(new GoogleMap());
        $this->addShortcode(new Highlight());
        $this->addShortcode(new Icon());
        $this->addShortcode(new IconListItem());
        $this->addShortcode(new IconWithText());
        $this->addShortcode(new ImageGallery());
        $this->addShortcode(new Message());
        $this->addShortcode(new OrderedList());
        $this->addShortcode(new PieChartBasic());
        $this->addShortcode(new PieChartPie());
        $this->addShortcode(new PieChartDoughnut());
        $this->addShortcode(new PieChartWithIcon());
        $this->addShortcode(new PricingTables());
        $this->addShortcode(new PricingTable());
        $this->addShortcode(new ProgressBar());
        $this->addShortcode(new Separator());
        $this->addShortcode(new SocialShare());
        $this->addShortcode(new Tabs());
        $this->addShortcode(new Tab());
        $this->addShortcode(new Team());
        $this->addShortcode(new TeamSlider());
        $this->addShortcode(new TeamSliderItem());
        $this->addShortcode(new UnorderedList());
        $this->addShortcode(new VideoButton());
        $this->addShortcode(new CoverBoxes());
        $this->addShortcode(new UnderlineIconBox());
        $this->addShortcode(new PricingInfo());
        $this->addShortcode(new ServiceTable());
        $this->addShortcode(new ProcessHolder());
        $this->addShortcode(new ProcessItem());
        $this->addShortcode(new InfoBox());
        $this->addShortcode(new InteractiveBanner());
        $this->addShortcode(new ProductList());
        $this->addShortcode(new Clients());
        $this->addShortcode(new Client());
        $this->addShortcode(new ProductListCarousel());
        $this->addShortcode(new RestaurantMenu());
        $this->addShortcode(new RestaurantItem());
        $this->addShortcode(new FullscreenSections());
        $this->addShortcode(new FullscreenSectionsItem());
        $this->addShortcode(new FullscreenSectionsItemSlide());
    }

    /**
     * Calls ShortcodeLoader::addShortcodes and than loops through added shortcodes and calls render method
     * of each shortcode object
     */
    public function load() {
        $this->addShortcodes();

        foreach($this->loadedShortcodes as $shortcode) {
            add_shortcode($shortcode->getBase(), array($shortcode, 'render'));
        }
    }
}

$shortcodeLoader = ShortcodeLoader::getInstance();
$shortcodeLoader->load();