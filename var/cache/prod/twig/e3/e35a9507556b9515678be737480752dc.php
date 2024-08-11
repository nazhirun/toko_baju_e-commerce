<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__296efd2d91eb8b33c7728cbc6d6cd63b */
class __TwigTemplate_f51a3b93b4264a7947ac8e3d88d29667 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/toko-baju/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/toko-baju/img/app_icon.png\" />

<title>Produk • caribaju</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = 'c2f1de2bdb1fe55d929c8380dce4d497';
    var token_admin_orders = tokenAdminOrders = '8b1f3818f0257534ebcb3fa2b05caf57';
    var token_admin_customers = '8e65dbb8ed6dc220cf915726ba3797bf';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '8f092261f4f3eadfa82a8d3f079b0f2e';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'ee2b4f10cca1004a15181f048d352b36';
    var choose_language_translate = 'Pilih Bahasa:';
    var default_language = '1';
    var admin_modules_link = '/toko-baju/admtokobaju/index.php/improve/modules/manage?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw';
    var admin_notification_get_link = '/toko-baju/admtokobaju/index.php/common/notifications?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw';
    var admin_notification_push_link = adminNotificat";
        // line 43
        echo "ionPushLink = '/toko-baju/admtokobaju/index.php/common/notifications/ack?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw';
    var tab_modules_list = '';
    var update_success_msg = 'update berhasil';
    var search_product_msg = 'Cari produk';
  </script>



<link
      rel=\"preload\"
      href=\"/toko-baju/admtokobaju/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/toko-baju/admtokobaju/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/toko-baju/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/toko-baju/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/toko-baju/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/toko-baju/admtokobaju/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/toko-baju\\/admtokobaju\\/\";
var baseDir = \"\\/toko-baju\\/\";
var changeFormLanguageUrl = \"\\/toko-baju\\/admtokobaju\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":";
        // line 69
        echo "\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/toko-baju/admtokobaju/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/admtokobaju/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/admtokobaju/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/toko-baju/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/toko-baju/admtokobaju/index.php/common/notifications?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-id adminproducts\"
  data-base-url=\"/toko-baju/admtokobaju/index.php\"  data-token=\"JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminDashboard&amp;token=230fe2d94a9b6207977c27b49fbdda3e\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9e3645d93a8f4d323d42de765da76480\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/toko-baju/admtokobaju/index.php/sell/catalog/categories/new?token=4128f4307de12204b86f678b9d69887b\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/toko-baju/admtokobaju/index.php/improve/modules/manage?token=4128f4307de12204b86f678b9d69887b\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/toko-baju/admtokobaju/index.php/sell/orders?token=4128f4307de12204b86f678b9d69887b\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item quick-row-link\"
         h";
        // line 140
        echo "ref=\"http://localhost/toko-baju/admtokobaju/index.php/sell/catalog/products/new?token=4128f4307de12204b86f678b9d69887b\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3bd87d33f8a0bae5bf08aa55551d2785\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"18\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products\"
        data-post-link=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminQuickAccesses&token=2e390c495eb981950ad8b1b641a0905d\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Produk - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminQuickAccesses&token=2e390c495eb981950ad8b1b641a0905d\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/toko-baju/admtokobaju/index.php?controller=AdminSearch&amp;token=f9326b6bc0016909962bd543b6d652a0\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query";
        // line 179
        echo "\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Nama\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor invoice\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extensio";
        // line 193
        echo "n</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Batal</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Akses cepat</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9e3645d93a8f4d323d42de765da76480\"
             data-item=\"Katalog evaluasi\"
    >Katalog evaluasi</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/toko-baju/admtokobaju/index.php/sell/catalog/categories/new?token=4128f4307de12204b86f678b9d69887b\"
             data-item=\"Kategori baru\"
    >Kategori baru</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/toko-baju/admtokobaju/index.php/improve/modules/manage?token=4128f4307de12204b86f678b9d69887b\"
             data-item=\"Modul terpasang\"
    >Modul terpasang</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/toko-baju/admtokobaju/index.php/sell/orders?token=4128f4307de12204b86f678b9d69887b\"
             data-item=\"Penjualan\"
    >Penjualan</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/toko-baju/admtokobaju/index.php/sell/catalog/products/new?token=4128f4307de12204b86f678b9d69887b\"
             data-item=\"Produk baru\"
    >Produk baru</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3bd87d33f8a0bae5bf08aa55551d2785\"
             data-item=\"Voucher baru\"
    >V";
        // line 235
        echo "oucher baru</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"4\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products\"
      data-post-link=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminQuickAccesses&token=2e390c495eb981950ad8b1b641a0905d\"
      data-prompt-text=\"Harap namai shortcut ini:\"
      data-link=\"Produk - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminQuickAccesses&token=2e390c495eb981950ad8b1b641a0905d\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/toko-baju/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Lihat toko</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=";
        // line 284
        echo "\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pesanan<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Pelanggan<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa &lt;strong&gt;&lt;a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=2dd1229de891a13fc6d574263b7718b1\"&gt;troli yang ditinggalkan&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Aktifkah Anda di media sosial akhir-akhir ini?
            </p>
            <div class=\"no";
        // line 333
        echo "tification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/toko-baju/img/pr/default.jpg\" alt=\"Nazhirun\" /></span>
        <span class=\"employee_profile\">Welcome back Nazhirun</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/toko-ba";
        // line 383
        echo "ju/admtokobaju/index.php/configure/advanced/employees/1/edit?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\">
      <i class=\"material-icons\">edit</i>
      <span>Profile Anda</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminLogin&amp;logout=1&amp;token=f7f4252188291149e150d507fc0a6d76\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/toko-baju/admtokobaju/index.php/configure/advanced/employees/toggle-navigation?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminDashboard&amp;token=230fe2d94a9b6207977c27b49fbdda3e\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminDashboard&amp;token=230fe2d94a9b6207977c27b49fbdda3e\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title";
        // line 432
        echo "\">Jual</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/toko-baju/admtokobaju/index.php/sell/orders/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Penjualan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/orders/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Penjualan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/orders/invoices/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Invoice
                                </a>
                              </li>

                         ";
        // line 466
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/orders/credit-slips/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Nota kredit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/orders/delivery-slips/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Nota pengiriman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCarts&amp;token=2dd1229de891a13fc6d574263b7718b1\" class=\"link\"> Daftar belanja
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
";
        // line 497
        echo "                    <a href=\"/toko-baju/admtokobaju/index.php/sell/catalog/products?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/catalog/products?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/catalog/categories?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Kategori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\"";
        // line 526
        echo ">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/catalog/monitoring/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminAttributesGroups&amp;token=eaaef24044ee6045172593f715e3ee2b\" class=\"link\"> Atribut dan Fitur
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/catalog/brands/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Brand dan Supplier
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/attachments/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
              ";
        // line 557
        echo "                                              
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCartRules&amp;token=3bd87d33f8a0bae5bf08aa55551d2785\" class=\"link\"> Diskon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/stocks/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Stok
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/toko-baju/admtokobaju/index.php/sell/customers/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu ";
        // line 587
        echo "panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/customers/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/addresses/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Alamat
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCustomerThreads&amp;token=8f092261f4f3eadfa82a8d3f079b0f2e\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Layanan Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                            ";
        // line 618
        echo "                                </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCustomerThreads&amp;token=8f092261f4f3eadfa82a8d3f079b0f2e\" class=\"link\"> Layanan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/toko-baju/admtokobaju/index.php/sell/customer-service/order-messages/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Pesan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminReturn&amp;token=5ccc9281928a4e05e271f7de68e21005\" class=\"link\"> Retur barang
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                      ";
        // line 649
        echo "                                
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminStats&amp;token=9e3645d93a8f4d323d42de765da76480\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistik
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Peningkatan</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/toko-baju/admtokobaju/index.php/improve/modules/manage?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modul
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3";
        // line 686
        echo "8\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/modules/manage?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/toko-baju/admtokobaju/index.php/improve/design/themes/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Desain
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/toko-baju/admtokobaju/index";
        // line 716
        echo ".php/improve/design/themes/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/design/mail_theme/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Tema email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/design/cms-pages/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Halaman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/design/modules/positions/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Posisi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=";
        // line 747
        echo "\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminImages&amp;token=f48e43cbc34bf77eccff9c024a8b11df\" class=\"link\"> Pengaturan Gambar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/toko-baju/admtokobaju/index.php/modules/link-widget/list?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Daftar tautan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCarriers&amp;token=14317a307cda6780ae4fb1792f6e3e92\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Pengiriman
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                    ";
        // line 777
        echo "                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminCarriers&amp;token=14317a307cda6780ae4fb1792f6e3e92\" class=\"link\"> Kurir
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/shipping/preferences/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/toko-baju/admtokobaju/index.php/improve/payment/payment_methods?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pembayaran
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
            ";
        // line 809
        echo "                                  <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/payment/payment_methods?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Cara Pembayaran
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/payment/preferences?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/toko-baju/admtokobaju/index.php/improve/international/localization/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internasional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                  ";
        // line 839
        echo "  keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/international/localization/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Pelokalan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/international/zones/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Lokasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/international/taxes/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Pajak
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ";
        // line 870
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/toko-baju/admtokobaju/index.php/improve/international/translations/settings?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Terjemahan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfigurasi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/toko-baju/admtokobaju/index.php/configure/shop/preferences/preferences?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parameter Toko
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
  ";
        // line 906
        echo "                              <a href=\"/toko-baju/admtokobaju/index.php/configure/shop/preferences/preferences?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Umum
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/shop/order-preferences/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Pengaturan Order
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/shop/product-preferences/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/shop/customer-preferences/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Pengaturan Pelanggan
                                </a>
                              </li>

                                                                                  
    ";
        // line 935
        echo "                          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/shop/contacts/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Kontak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/shop/seo-urls/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminSearchConf&amp;token=0b35043d6b8b19ba9f132f720cf1f970\" class=\"link\"> Cari
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/system-information/?_token";
        // line 965
        echo "=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parameter lanjutan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/system-information/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Informasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/performance/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Kinerja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
               ";
        // line 995
        echo "                 <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/administration/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Administrasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/emails/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/import/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Impor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/employees/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Karyawan
                                </a>
                              </li>

                                                                                  
                              
                                                            ";
        // line 1025
        echo "
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/sql-requests/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/logs/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Log
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/webservice-keys/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/feature-flags/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> New &amp; Exper";
        // line 1051
        echo "imental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/toko-baju/admtokobaju/index.php/configure/advanced/security/?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Katalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/toko-baju/admtokobaju/index.php/sell/catalog/products?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\" aria-current=\"page\">Produk</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produk          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/toko-baju/admtokobaju/index.php/sell/catalog/products/new?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\"                  title=\"Membuat produk baru: CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
";
        // line 1103
        echo "                  <i class=\"material-icons\">add_circle_outline</i>                  Produk baru
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/toko-baju/admtokobaju/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fid%252Fdoc%252FAdminProducts%253Fversion%253D8.0.4%2526country%253Did/Bantuan?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/toko-baju/admtokobaju/index.php/sell/catalog/products/new?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\"              title=\"Membuat produk baru: CTRL+P\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Produk baru
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Bantuan\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/toko-baju/admtokobaju/index.php/common/sidebar/https%253A%252F%2";
        // line 1143
        echo "52Fhelp.prestashop-project.org%252Fid%252Fdoc%252FAdminProducts%253Fversion%253D8.0.4%2526country%253Did/Bantuan?_token=JQX_JjP7fMhUyw9ADyXuudGbDUXEAn33X0DfdhySAQw\"
            >
              Bantuan
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1164
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"http://localhost/toko-baju/admtokobaju/index.php?controller=AdminDashboard&amp;token=230fe2d94a9b6207977c27b49fbdda3e\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Kembali
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1198
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1164
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1198
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__296efd2d91eb8b33c7728cbc6d6cd63b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 1198,  1340 => 1164,  1329 => 102,  1320 => 1198,  1280 => 1164,  1257 => 1143,  1215 => 1103,  1161 => 1051,  1133 => 1025,  1101 => 995,  1069 => 965,  1037 => 935,  1006 => 906,  968 => 870,  935 => 839,  903 => 809,  869 => 777,  837 => 747,  804 => 716,  772 => 686,  733 => 649,  700 => 618,  667 => 587,  635 => 557,  602 => 526,  571 => 497,  538 => 466,  502 => 432,  451 => 383,  399 => 333,  348 => 284,  297 => 235,  253 => 193,  237 => 179,  196 => 140,  153 => 102,  118 => 69,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__296efd2d91eb8b33c7728cbc6d6cd63b", "");
    }
}
