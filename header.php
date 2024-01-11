<?php
global $theme_uri;
$theme_uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header class="header-topo">
    <div class="header-topo-links container">
      <div class="header-topo-link">
        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.7808 18.4693C15.8265 20.4236 10.8216 18.5873 6.60202 14.3677C2.38247 10.1482 0.546141 5.14325 2.50045 3.18893L3.78722 1.90216C4.67555 1.01383 6.13929 1.03731 7.05659 1.95461L9.04967 3.9477C9.96697 4.86499 9.99045 6.32874 9.10212 7.21706L8.82574 7.49345C8.34612 7.97307 8.2992 8.74679 8.74485 9.28685C9.17472 9.80776 9.63815 10.3266 10.1406 10.8291C10.6431 11.3316 11.162 11.795 11.6829 12.2249C12.2229 12.6705 12.9967 12.6236 13.4763 12.144L13.7527 11.8676C14.641 10.9793 16.1047 11.0028 17.022 11.9201L19.0151 13.9131C19.9324 14.8304 19.9559 16.2942 19.0676 17.1825L17.7808 18.4693Z" stroke="#231F20" stroke-width="1.5" />
          <path d="M16.3453 7.25071C16.1013 6.65553 15.7376 6.0979 15.2544 5.61463C14.7984 5.15865 14.2762 4.80918 13.7188 4.56622" stroke="#231F20" stroke-width="1.5" stroke-linecap="round" />
          <path d="M13.7187 1.16341C15.0534 1.64691 16.3056 2.42365 17.3756 3.49364C18.4724 4.59049 19.2611 5.87883 19.7417 7.25113" stroke="#231F20" stroke-width="1.5" stroke-linecap="round" />
        </svg>
        <a href="">
          (19) 9 9999-9999
        </a>
      </div>
      <div class="header-topo-link">
        <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.90625 7.5V6.5C0.90625 3.73858 3.14483 1.5 5.90625 1.5H15.9062C18.6677 1.5 20.9062 3.73858 20.9062 6.5V12.5C20.9062 15.2614 18.6677 17.5 15.9062 17.5H5.90625C3.14483 17.5 0.90625 15.2614 0.90625 12.5V11.5" stroke="#231F20" stroke-width="1.5" stroke-linecap="round" />
          <path d="M4.90625 6.5L9.70625 10.1C10.4174 10.6333 11.3951 10.6333 12.1063 10.1L16.9062 6.5" stroke="#231F20" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <a href="">
          advogado@advogado.com.br
        </a>
      </div>
    </div>
  </header>