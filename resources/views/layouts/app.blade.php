<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <style>
    .fool-search-label {
      display: none
    }

    .ticker-input {
      position: relative;
      z-index: 999999
    }

    .ticker-input-results {
      min-width: 320px;
      margin: 0;
      position: absolute;
      z-index: 1;
      top: 55px;
      left: 307px;
      right: 0;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 0 5px #A7A8A9;
      line-height: 1;
      width: 500px
    }

    .ticker-input-results .ticker-input-results-result {
      display: flex;
      flex-direction: row;
      height: min-content;
      border: 1px dotted #A7A8A9;
      font-size: 14px;
      padding: 3px 10px;
      cursor: pointer
    }

    .ticker-input-results .ticker-input-results-result.active {
      background-color: #edeeee;
      border: 1px solid #006BA6;
      border-radius: 4px;
      cursor: pointer
    }

    .ticker-input-results-company {
      flex: 10;
      padding: 5px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis
    }

    .ticker-input-results-symbol {
      min-width: 70px;
      font-weight: bold;
      padding: 5px;
      text-align: left;
      white-space: nowrap
    }

    .ticker-input-results-exchange {
      flex: 1;
      color: #8A8C8E;
      font-weight: normal;
      padding: 5px
    }

    .exchange-icon {
      flex: 1;
      min-width: 20px;
      background-repeat: no-repeat;
      background-position: center center
    }

    .exchange-NYSE {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-NASDAQ {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-NYSEMKT {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-NASDAQOTCBB {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-NASDAQOTH {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-NASDAQMUTFUND {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-TREASURY {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-NNM {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedStates.png")
    }

    .exchange-LSE {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedKingdom.png")
    }

    .exchange-FTSE {
      background-image: url("https://g.foolcdn.com/art/Flags/18/UnitedKingdom.png")
    }

    .exchange-TSX {
      background-image: url("https://g.foolcdn.com/art/Flags/18/Canada.png")
    }

    .exchange-TSXV {
      background-image: url("https://g.foolcdn.com/art/Flags/18/Canada.png")
    }

    .exchange-CMF {
      background-image: url("https://g.foolcdn.com/art/Flags/18/Canada.png")
    }

    .exchange-ASX {
      background-image: url("https://g.foolcdn.com/art/Flags/18/Australia.png")
    }

    .exchange-ASXINDICES {
      background-image: url("https://g.foolcdn.com/art/Flags/18/Australia.png")
    }

    .exchange-NIKKEIINDICES {
      background-image: url("https://g.foolcdn.com/art/Flags/18/Japan.png")
    }

    .exchange-HSIINDICES {
      background-image: url("https://g.foolcdn.com/art/Flags/18/HongKong.png")
    }

    .exchange-DAXINDICES {
      background-image: url("https://g.foolcdn.com/art/Flags/18/Germany.png")
    }

    .exchange-CACINDICES {
      background-image: url("https://g.foolcdn.com/art/Flags/18/France.png")
    }

    .usmf-article-nav {
      font-family: Roboto, sans-serif;
      color: #fff;
      top: 51px;
      position: sticky
    }

    @media screen and (max-width:1023px) {
      .usmf-article-nav {
        top: 0px
      }
    }

    .usmf-article-nav .important\:hover-white {
      color: white !important
    }

    .usmf-article-nav .topnav-wrapper {
      margin: auto;
      max-width: 1280px;
      width: 100%
    }

    @media screen and (max-width:1023px) {
      .usmf-article-nav .topnav-wrapper {
        height: 100% !important;
        padding: 0 !important
      }
    }

    .usmf-article-nav .topnav {
      height: 72px;
      top: 54px;
      transition: 0.4s
    }

    @media screen and (max-width:1023px) {
      .usmf-article-nav .topnav {
        top: 3px
      }
    }

    .usmf-article-nav .topnav nav {
      height: 100%
    }

    .usmf-article-nav .topnav .logo {
      padding: 0;
      width: 145px
    }

    .usmf-article-nav .topnav a {
      color: #fff
    }

    .usmf-article-nav .topnav .dropdown-label {
      color: #fff;
      line-height: 1;
      padding: 28px 18px;
      cursor: pointer;
      position: relative;
      white-space: nowrap
    }

    .usmf-article-nav .topnav .dropdown-label svg {
      color: #fff;
      height: 13px;
      position: absolute;
      right: 0;
      top: 40%;
      transition: none;
      width: 13px
    }

    .usmf-article-nav .topnav .dropdown-label:hover {
      background: #24125F;
      color: #FFB81C
    }

    .usmf-article-nav .topnav .dropdown-label:hover svg {
      color: #FFB81C
    }

    .usmf-article-nav .dropdown .submenu {
      background: #24125F;
      border-top: solid 1px #753BBD;
      display: flex;
      left: 0;
      position: absolute;
      top: 72px;
      width: 100%;
      visibility: hidden;
      transition-delay: 0.4s
    }

    .usmf-article-nav .dropdown .submenu a:hover {
      color: #FFB81C
    }

    .usmf-article-nav .dropdown:hover .submenu {
      transition-delay: 0.4s;
      visibility: visible
    }

    .usmf-article-nav .dropdown:focus-within .submenu {
      visibility: visible;
      transition-delay: 0s
    }

    .usmf-article-nav .returns a {
      color: #006BA6;
      font-weight: 700
    }

    .usmf-article-nav .topnav-picks {
      background: #E31C79;
      border-color: #E31C79;
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.16);
      font-weight: 700;
      height: 36px;
      margin-left: 32px;
      margin-top: 19px
    }

    .usmf-article-nav .topnav-picks:hover {
      background-color: #E958A4
    }

    .usmf-article-nav .topnav-picks a {
      color: #fff;
      padding: 20px
    }

    #mobile-nav-container {
      max-height: calc(100% - 75px);
      overflow: scroll;
      position: fixed;
      top: 75px
    }

    #nav-alert-banner-container~.page-grid-container #mobile-nav-container {
      padding-top: 45px
    }

    #mobile-nav-container .submenu a {
      color: #fff
    }

    #mobile-nav-container .dropdown.active .dropdown-label {
      border-bottom: none;
      color: #FFB81C
    }

    #mobile-nav-container .dropdown.active .dropdown-label .angle-down {
      display: none
    }

    #mobile-nav-container .dropdown.active .dropdown-label .angle-up {
      display: block
    }

    #mobile-nav-container .dropdown.active .mobile-submenu {
      display: block
    }

    #mobile-nav-container .topnav-picks {
      margin: 0
    }

    #mobile-nav-container .topnav-picks a {
      height: 36px;
      line-height: 36px;
      padding: 0
    }

    #mobile-nav-container .search-box {
      margin: 0 -24px
    }

    #mobile-nav-container .search-box input {
      height: 60px;
      -webkit-appearance: none
    }

    #mobile-nav-container .search-box .ticker-input-results {
      color: #53565A;
      left: 0;
      top: 60px;
      width: auto
    }

    #nav-promo-banner-container {
      top: 126px;
      width: 100%;
      position: sticky
    }

    @media screen and (max-width:1023px) {
      #nav-promo-banner-container {
        margin: 0 24px;
        top: 75px;
        width: calc(100% - 48px)
      }
    }

    #nav-alert-banner-container {
      top: 0;
      width: 100%;
      z-index: 1001;
      position: relative
    }

    #nav-promo-banner {
      margin: auto;
      max-width: 1280px
    }

    #tophat-container {
      background: #fafafa;
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1001
    }

    #tophat {
      font-family: Roboto, sans-serif;
      font-size: 12px;
      height: 48px;
      height: 51px;
      justify-content: space-between;
      margin: auto;
      max-width: 1290px
    }

    #tophat input {
      background: #EDEEEE;
      font-size: 14px;
      height: 100%;
      padding: 0 40px 0 24px;
      width: 356px
    }

    #tophat input::placeholder {
      color: #8A8C8E;
      font-style: italic
    }

    #tophat .ticker-input-results {
      left: 0;
      top: 54px
    }

    #tophat .icon {
      height: 18px;
      position: relative;
      right: 30px;
      width: 18px
    }

    #tophat .tophat-links {
      align-items: center;
      display: flex
    }

    #tophat .tophat-links a {
      border-right: solid 1px #EDEEEE;
      color: #8A8C8E;
      line-height: 48px;
      padding: 0 24px;
      text-transform: uppercase
    }

    #tophat .tophat-links a.cta-highlight {
      color: #E31C79
    }

    #tophat .tophat-links a:hover {
      color: #1C1D20
    }

    #tophat .tophat-links a:last-child {
      border: none;
      padding-right: 8px
    }

    .tophat-color-line {
      display: flex
    }

    .tophat-color-line div {
      height: 3px;
      width: 100%
    }

    .tophat-color-line div.green {
      background: #43B02A
    }

    .tophat-color-line div.cyan {
      background: #0095C8
    }

    .tophat-color-line div.blue {
      background: #485CC7
    }

    .tophat-color-line div.royal {
      background: #753BBD
    }

    .tophat-color-line div.purple {
      background: #981E97
    }

    .tophat-color-line div.magenta {
      background: #E31C79
    }

    .tophat-color-line div.red {
      background: #F9423A
    }

    .tophat-color-line div.orange {
      background: #FF6900
    }

    .tophat-color-line div.bronze {
      background: #CF7F00
    }

    .tophat-color-line div.gold {
      background: #FFB81C
    }

    #usmf-footer {
      font-size: 14px;
      line-height: 1rem
    }

    #usmf-footer ul {
      padding: 0
    }

    #usmf-footer li {
      list-style: none;
      padding: 0.5rem 0
    }

    #usmf-footer h2 {
      font-size: 14px
    }

    #usmf-footer .footer-main {
      padding: 2em 1.618em;
      max-width: 1280px;
      margin: 0 auto
    }

    @media screen and (min-width:1024px) {
      #usmf-footer .footer-main {
        display: grid;
        grid-gap: 2rem;
        grid-template: "site-info link-lists";
        padding-top: 3rem
      }
    }

    #usmf-footer .footer-site-info {
      grid-area: site-info
    }

    #usmf-footer .fool-logo {
      max-width: 147px;
      margin: 0.25rem 0 0.5rem
    }

    #usmf-footer .tagline {
      color: #FAFAFA;
      margin-bottom: 1rem
    }

    #usmf-footer .footer-social {
      display: flex;
      margin-bottom: 1.4rem
    }

    #usmf-footer .footer-small {
      font-size: 0.625rem;
      margin-bottom: 2rem
    }

    #usmf-footer .footer-small p {
      margin-bottom: 0
    }

    #usmf-footer .footer-small a {
      text-decoration: underline
    }

    #usmf-footer .footer-lists {
      grid-area: link-lists;
      display: grid;
      grid-template-columns: repeat(auto-fill, 150px);
      grid-gap: 2rem;
      margin-bottom: 2.5em
    }

    @media screen and (max-width:859px) {
      #usmf-footer .footer-lists {
        column-gap: 2.5rem;
        line-height: 1.25;
        margin-bottom: 0
      }
    }

    @media screen and (min-width:660px) {
      #usmf-footer .footer-lists {
        grid-template-columns: unset;
        grid-auto-columns: 1fr
      }
    }

    @media screen and (min-width:660px) {
      #usmf-footer .footer-list {
        grid-row: 1
      }
    }

    #usmf-footer .legal-text {
      background: #FAFAFA
    }

    #usmf-footer .legal-text ul {
      margin: 0
    }

    #usmf-footer .legal-text li {
      padding: 0 16px
    }

    @media screen and (max-width:859px) {
      #usmf-footer .legal-text li {
        padding: 8px 0
      }
    }

    *,
    ::before,
    ::after {
      --tw-border-opacity: 1;
      border-color: rgba(138, 140, 142, var(--tw-border-opacity))
    }

    .stroke-current {
      stroke: currentColor
    }

    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      --tw-text-opacity: 1;
      color: rgba(138, 140, 142, 1);
      color: rgba(138, 140, 142, var(--tw-text-opacity));
      box-sizing: border-box;
      line-height: 1.5;
      -webkit-text-size-adjust: 100%
    }

    body {
      margin: 0
    }

    main {
      display: block
    }

    h1 {
      font-size: 2em;
      margin: 0.67em 0
    }

    hr {
      box-sizing: content-box;
      height: 0;
      overflow: visible
    }

    pre {
      font-family: monospace, monospace;
      font-size: 1em
    }

    a {
      background-color: transparent
    }

    abbr[title] {
      border-bottom: none;
      text-decoration: underline;
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    samp {
      font-family: monospace, monospace;
      font-size: 1em
    }

    small {
      font-size: 0.625rem;
      line-height: 0.75rem;
      line-height: 1.2
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -0.25em
    }

    sup {
      top: -0.5em
    }

    button {
      background: transparent;
      padding: 0
    }

    button,
    [role='button'] {
      cursor: pointer
    }

    textarea {
      overflow: auto;
      resize: vertical
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0
    }

    button,
    input {
      overflow: visible
    }

    button,
    select {
      text-transform: none
    }

    button,
    [type='button'],
    [type='reset'],
    [type='submit'] {
      -webkit-appearance: button
    }

    button::-moz-focus-inner,
    [type='button']::-moz-focus-inner,
    [type='reset']::-moz-focus-inner,
    [type='submit']::-moz-focus-inner {
      border-style: none;
      padding: 0
    }

    button:-moz-focusring,
    [type='button']:-moz-focusring,
    [type='reset']:-moz-focusring,
    [type='submit']:-moz-focusring {
      outline: none
    }

    fieldset {
      margin: 0;
      padding: 0.35em 0.75em 0.625em
    }

    legend {
      box-sizing: border-box;
      color: inherit;
      display: table;
      max-width: 100%;
      padding: 0;
      white-space: normal
    }

    progress {
      vertical-align: baseline
    }

    [type='checkbox'],
    [type='radio'] {
      box-sizing: border-box;
      padding: 0
    }

    [type='number']::-webkit-inner-spin-button,
    [type='number']::-webkit-outer-spin-button {
      height: auto
    }

    [type='search'] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    [type='search']::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    details {
      display: block
    }

    summary {
      display: list-item
    }

    template {
      display: none
    }

    [hidden] {
      display: none
    }

    blockquote,
    dl,
    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    p,
    pre {
      margin: 0
    }

    button:focus {
      outline: none
    }

    ol,
    ul {
      margin: 0
    }

    *,
    *::before,
    *::after {
      border-color: currentColor;
      border-style: solid;
      border-width: 0;
      box-sizing: inherit
    }

    img {
      border-style: solid;
      height: auto;
      max-width: 100%
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
      color: inherit;
      opacity: 0.5
    }

    input::placeholder,
    textarea::placeholder {
      color: inherit;
      opacity: 0.5
    }

    table {
      border-collapse: collapse
    }

    select:-moz-focusring {
      color: transparent;
      text-shadow: 0 0 0 #000
    }

    *:focus {
      outline: none;
      --tw-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    [data-whatintent='mouse'] *:focus {
      --tw-shadow: 0 0 rgba(0, 0, 0, 0);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    p {
      font-size: 1rem;
      line-height: 1.5rem
    }

    @media (min-width:40em) {
      p {
        line-height: 1.625rem
      }
    }

    .tailwind-article-body p a,
    .tailwind-article-body li a {
      text-decoration: none
    }

    .tailwind-article-body p a,
    .tailwind-article-body li a {
      --tw-text-opacity: 1;
      color: rgba(0, 107, 166, 1);
      color: rgba(0, 107, 166, var(--tw-text-opacity))
    }

    .tailwind-article-body p a:hover,
    .tailwind-article-body p a:active,
    .tailwind-article-body li a:hover,
    .tailwind-article-body li a:active {
      background-position: left bottom;
      background-repeat: repeat-x
    }

    .tailwind-article-body p a:hover,
    .tailwind-article-body p a:active,
    .tailwind-article-body li a:hover,
    .tailwind-article-body li a:active {
      background-image: linear-gradient(to right, #6AD1E3 100%, transparent 100%);
      background-size: 1px 1px
    }

    .tailwind-article-body p a:active,
    .tailwind-article-body li a:active {
      --tw-bg-opacity: 1;
      background-color: rgba(106, 209, 227, var(--tw-bg-opacity));
      background-image: linear-gradient(to right, #6AD1E3 100%, transparent 100%)
    }

    strong {
      font-weight: 700
    }

    .group:focus .group-hover\:text-blue-700 {
      --tw-text-opacity: 1;
      color: rgba(72, 92, 199, 1);
      color: rgba(72, 92, 199, var(--tw-text-opacity))
    }

    .group:focus .group-hover\:text-wht-80 {
      color: rgba(255, 255, 255, 0.8)
    }

    .group:focus .group-hover\:text-white {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .group:focus .group-hover\:text-white {
      color: #fff
    }

    .group:focus .group-hover\:text-white {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .group:focus .group-hover\:text-white {
      color: #fff
    }

    .group:focus .group-hover\:opacity-100 {
      opacity: 1
    }

    .fade-enter-active,
    .fade-leave-active {
      transition: opacity 0.5s
    }

    .fade-enter,
    .fade-leave-to {
      opacity: 0
    }

    .modal-enter {
      opacity: 0
    }

    .modal-leave-active {
      opacity: 0
    }

    .modal-mask {
      background-color: rgba(0, 0, 0, .7);
      transition: opacity .3s ease
    }

    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
      transform: scale(1.1)
    }

    .bg-gradient-brand {
      background-image: linear-gradient(45deg, #fafafa, #f3f3f3)
    }

    .foolcom-btn {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn {
      color: #fff
    }

    .foolcom-btn-green {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-green:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-green {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-green {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-green {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-green {
        width: auto
      }
    }

    .foolcom-btn-green {
      --tw-bg-opacity: 1;
      background-color: rgba(67, 176, 42, var(--tw-bg-opacity))
    }

    .foolcom-btn-green:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(105, 199, 72, var(--tw-bg-opacity))
    }

    .foolcom-btn-cyan {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-cyan:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-cyan {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-cyan {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-cyan {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-cyan {
        width: auto
      }
    }

    .foolcom-btn-cyan {
      --tw-bg-opacity: 1;
      background-color: rgba(0, 149, 200, var(--tw-bg-opacity))
    }

    .foolcom-btn-cyan:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(53, 178, 214, var(--tw-bg-opacity))
    }

    .foolcom-btn-white {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-white:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-white {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-white {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-white {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-white {
        width: auto
      }
    }

    .foolcom-btn-white {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
    }

    .foolcom-btn-white:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
    }

    .foolcom-btn-white {
      --tw-text-opacity: 1;
      color: rgba(0, 149, 200, 1);
      color: rgba(0, 149, 200, var(--tw-text-opacity))
    }

    .foolcom-btn-white:hover {
      --tw-text-opacity: 1;
      color: rgba(53, 178, 214, 1);
      color: rgba(53, 178, 214, var(--tw-text-opacity))
    }

    .foolcom-btn-gold {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-gold:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-gold {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-gold {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-gold {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-gold {
        width: auto
      }
    }

    .foolcom-btn-gold {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 184, 28, var(--tw-bg-opacity))
    }

    .foolcom-btn-gold:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(251, 204, 85, var(--tw-bg-opacity))
    }

    .foolcom-btn-orange {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-orange:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-orange {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-orange {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-orange {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-orange {
        width: auto
      }
    }

    .foolcom-btn-orange {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 105, 0, var(--tw-bg-opacity))
    }

    .foolcom-btn-orange:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(250, 131, 55, var(--tw-bg-opacity))
    }

    .foolcom-btn-magenta {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-magenta:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-magenta {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-magenta {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-magenta {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-magenta {
        width: auto
      }
    }

    .foolcom-btn-magenta {
      --tw-bg-opacity: 1;
      background-color: rgba(227, 28, 121, var(--tw-bg-opacity))
    }

    .foolcom-btn-magenta:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(233, 88, 164, var(--tw-bg-opacity))
    }

    .foolcom-btn-blue {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-blue:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-blue {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-blue {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-blue {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-blue {
        width: auto
      }
    }

    .foolcom-btn-blue {
      --tw-bg-opacity: 1;
      background-color: rgba(72, 92, 199, var(--tw-bg-opacity))
    }

    .foolcom-btn-blue:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(115, 133, 214, var(--tw-bg-opacity))
    }

    .foolcom-btn-red {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-red:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-red {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-red {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-red {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-red {
        width: auto
      }
    }

    .foolcom-btn-red {
      --tw-bg-opacity: 1;
      background-color: rgba(216, 39, 52, var(--tw-bg-opacity))
    }

    .foolcom-btn-red:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(249, 66, 58, var(--tw-bg-opacity))
    }

    .foolcom-btn-purple {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-purple:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-purple {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-purple {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-purple {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-purple {
        width: auto
      }
    }

    .foolcom-btn-purple {
      --tw-bg-opacity: 1;
      background-color: rgba(152, 30, 151, var(--tw-bg-opacity))
    }

    .foolcom-btn-purple:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(176, 84, 185, var(--tw-bg-opacity))
    }

    .foolcom-btn-royal-purple {
      display: inline-block;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 2rem;
      padding-right: 2rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      text-align: center;
      font-size: 1.125rem;
      line-height: 1.375rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-royal-purple:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .foolcom-btn-royal-purple {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow);
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .tailwind-article-body .portable-module .foolcom-btn-royal-purple {
      color: #fff
    }

    .wagtail-ecap .foolcom-btn-royal-purple {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn-royal-purple {
        width: auto
      }
    }

    .foolcom-btn-royal-purple {
      --tw-bg-opacity: 1;
      background-color: rgba(117, 59, 189, var(--tw-bg-opacity))
    }

    .foolcom-btn-royal-purple:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(144, 104, 204, var(--tw-bg-opacity))
    }

    .foolcom-btn-lg {
      padding-left: 1.5rem;
      padding-right: 1.5rem;
      padding-top: 0.625rem;
      padding-bottom: 0.625rem;
      font-size: 1rem;
      line-height: 1.5rem
    }

    .foolcom-btn-md {
      padding-left: 1rem;
      padding-right: 1rem;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      font-size: 0.875rem;
      line-height: 1.125rem
    }

    *,
    *::before,
    *::after {
      border-color: #8A8C8E;
      border-style: solid;
      border-width: 0;
      box-sizing: inherit
    }

    button {
      -webkit-appearance: none;
      background: transparent
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin-top: 0;
      margin-bottom: 0.5rem
    }

    html {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      line-height: 1.15;
      -webkit-text-size-adjust: 100%
    }

    svg,
    svg *:not([fill]) {
      fill: currentColor
    }

    select:-moz-focusring {
      color: transparent;
      text-shadow: 0 0 0 #000
    }

    *:focus {
      outline: none;
      --tw-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    [data-whatintent="mouse"] *:focus {
      --tw-shadow: 0 0 rgba(0, 0, 0, 0);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    svg {
      fill: currentColor
    }

    *,
    *::before,
    *::after {
      border-color: #8A8C8E
    }

    img {
      border-style: solid;
      height: auto;
      max-width: 100%
    }

    input::-moz-placeholder,
    textarea::-moz-placeholder {
      color: inherit;
      opacity: 0.5
    }

    input::placeholder,
    textarea::placeholder {
      color: inherit;
      opacity: 0.5
    }

    table {
      border-collapse: collapse
    }

    select:-moz-focusring {
      color: transparent;
      text-shadow: 0 0 0 #000
    }

    *:focus {
      outline: none;
      --tw-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    [data-whatintent="mouse"] *:focus {
      --tw-shadow: 0 0 rgba(0, 0, 0, 0);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .pointer-events-none {
      pointer-events: none
    }

    .pointer-events-auto {
      pointer-events: auto
    }

    .visible {
      visibility: visible
    }

    .invisible {
      visibility: hidden
    }

    .static {
      position: static
    }

    .fixed {
      position: fixed
    }

    .absolute {
      position: absolute
    }

    .relative {
      position: relative
    }

    .sticky {
      position: sticky
    }

    .top-0 {
      top: 0
    }

    .top-75 {
      top: 4.6875rem
    }

    .top-112 {
      top: 7rem
    }

    .top-152 {
      top: 9.5rem
    }

    .top-0px {
      top: 0
    }

    .top-8px {
      top: 0.5rem
    }

    .top-full {
      top: 100%
    }

    .right-0 {
      right: 0
    }

    .right-0px {
      right: 0
    }

    .right-12px {
      right: 0.75rem
    }

    .bottom-0 {
      bottom: 0
    }

    .bottom-32 {
      bottom: 2rem
    }

    .bottom-60 {
      bottom: 60px
    }

    .bottom-0px {
      bottom: 0
    }

    .bottom-28px {
      bottom: 1.75rem
    }

    .left-0 {
      left: 0
    }

    .left-32 {
      left: 2rem
    }

    .left-0px {
      left: 0
    }

    .left-12px {
      left: 0.75rem
    }

    .left-half {
      left: 50%
    }

    .z-0 {
      z-index: 0
    }

    .z-10 {
      z-index: 10
    }

    .z-20 {
      z-index: 20
    }

    .z-40 {
      z-index: 40
    }

    .z-50 {
      z-index: 50
    }

    .z-top {
      z-index: 1000
    }

    .-z-1 {
      z-index: -1
    }

    .col-span-12 {
      grid-column: span 12 / span 12
    }

    .col-start-1 {
      grid-column-start: 1
    }

    .col-start-2 {
      grid-column-start: 2
    }

    .col-start-3 {
      grid-column-start: 3
    }

    .col-start-4 {
      grid-column-start: 4
    }

    .col-end-2 {
      grid-column-end: 2
    }

    .col-end-3 {
      grid-column-end: 3
    }

    .col-end-4 {
      grid-column-end: 4
    }

    .col-end-6 {
      grid-column-end: 6
    }

    .row-start-1 {
      grid-row-start: 1
    }

    .row-start-2 {
      grid-row-start: 2
    }

    .row-start-3 {
      grid-row-start: 3
    }

    .row-start-4 {
      grid-row-start: 4
    }

    .row-start-5 {
      grid-row-start: 5
    }

    .row-start-6 {
      grid-row-start: 6
    }

    .row-end-2 {
      grid-row-end: 2
    }

    .row-end-3 {
      grid-row-end: 3
    }

    .row-end-4 {
      grid-row-end: 4
    }

    .row-end-5 {
      grid-row-end: 5
    }

    .row-end-6 {
      grid-row-end: 6
    }

    .row-end-7 {
      grid-row-end: 7
    }

    .float-right {
      float: right
    }

    .float-left {
      float: left
    }

    .clear-both {
      clear: both
    }

    .m-auto {
      margin: auto
    }

    .m-0px {
      margin: 0
    }

    .m-16px {
      margin: 1rem
    }

    .m-24px {
      margin: 1.5rem
    }

    .mx-20 {
      margin-left: 1.25rem;
      margin-right: 1.25rem
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .mx-0px {
      margin-left: 0;
      margin-right: 0
    }

    .mx-4px {
      margin-left: 0.25rem;
      margin-right: 0.25rem
    }

    .mx-24px {
      margin-left: 1.5rem;
      margin-right: 1.5rem
    }

    .mx-28px {
      margin-left: 1.75rem;
      margin-right: 1.75rem
    }

    .mx-32px {
      margin-left: 2rem;
      margin-right: 2rem
    }

    .-mx-24px {
      margin-left: -1.5rem;
      margin-right: -1.5rem
    }

    .my-10 {
      margin-top: 0.625rem;
      margin-bottom: 0.625rem
    }

    .my-48 {
      margin-top: 3rem;
      margin-bottom: 3rem
    }

    .my-64 {
      margin-top: 4rem;
      margin-bottom: 4rem
    }

    .my-2px {
      margin-top: 0.125rem;
      margin-bottom: 0.125rem
    }

    .my-4px {
      margin-top: 0.25rem;
      margin-bottom: 0.25rem
    }

    .my-8px {
      margin-top: 0.5rem;
      margin-bottom: 0.5rem
    }

    .my-12px {
      margin-top: 0.75rem;
      margin-bottom: 0.75rem
    }

    .my-16px {
      margin-top: 1rem;
      margin-bottom: 1rem
    }

    .my-20px {
      margin-top: 1.25rem;
      margin-bottom: 1.25rem
    }

    .my-24px {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem
    }

    .my-32px {
      margin-top: 2rem;
      margin-bottom: 2rem
    }

    .my-36px {
      margin-top: 2.25rem;
      margin-bottom: 2.25rem
    }

    .my-48px {
      margin-top: 3rem;
      margin-bottom: 3rem
    }

    .mt-6 {
      margin-top: 0.375rem
    }

    .mt-8 {
      margin-top: 0.5rem
    }

    .mt-10 {
      margin-top: 0.625rem
    }

    .mt-12 {
      margin-top: 0.75rem
    }

    .mt-20 {
      margin-top: 1.25rem
    }

    .mt-40 {
      margin-top: 2.5rem
    }

    .mt-56 {
      margin-top: 3.5rem
    }

    .mt-60 {
      margin-top: 3.75rem
    }

    .mt-80 {
      margin-top: 5rem
    }

    .mt-120 {
      margin-top: 7.5rem
    }

    .mt-0px {
      margin-top: 0
    }

    .mt-2px {
      margin-top: 0.125rem
    }

    .mt-4px {
      margin-top: 0.25rem
    }

    .mt-8px {
      margin-top: 0.5rem
    }

    .mt-12px {
      margin-top: 0.75rem
    }

    .mt-16px {
      margin-top: 1rem
    }

    .mt-20px {
      margin-top: 1.25rem
    }

    .mt-24px {
      margin-top: 1.5rem
    }

    .mt-28px {
      margin-top: 1.75rem
    }

    .mt-32px {
      margin-top: 2rem
    }

    .mt-36px {
      margin-top: 2.25rem
    }

    .mt-40px {
      margin-top: 2.5rem
    }

    .mt-48px {
      margin-top: 3rem
    }

    .-mt-32px {
      margin-top: -2rem
    }

    .mr-10 {
      margin-right: 0.625rem
    }

    .mr-16 {
      margin-right: 1rem
    }

    .mr-4px {
      margin-right: 0.25rem
    }

    .mr-8px {
      margin-right: 0.5rem
    }

    .mr-12px {
      margin-right: 0.75rem
    }

    .mr-16px {
      margin-right: 1rem
    }

    .mr-24px {
      margin-right: 1.5rem
    }

    .mr-36px {
      margin-right: 2.25rem
    }

    .-mr-40 {
      margin-right: -2.5rem
    }

    .-mr-12px {
      margin-right: -0.75rem
    }

    .mb-6 {
      margin-bottom: 0.375rem
    }

    .mb-10 {
      margin-bottom: 0.625rem
    }

    .mb-12 {
      margin-bottom: 0.75rem
    }

    .mb-14 {
      margin-bottom: 0.875rem
    }

    .mb-16 {
      margin-bottom: 1rem
    }

    .mb-20 {
      margin-bottom: 1.25rem
    }

    .mb-40 {
      margin-bottom: 2.5rem
    }

    .mb-48 {
      margin-bottom: 3rem
    }

    .mb-60 {
      margin-bottom: 3.75rem
    }

    .mb-64 {
      margin-bottom: 4rem
    }

    .mb-80 {
      margin-bottom: 5rem
    }

    .mb-160 {
      margin-bottom: 10rem
    }

    .mb-0px {
      margin-bottom: 0
    }

    .mb-2px {
      margin-bottom: 0.125rem
    }

    .mb-4px {
      margin-bottom: 0.25rem
    }

    .mb-8px {
      margin-bottom: 0.5rem
    }

    .mb-12px {
      margin-bottom: 0.75rem
    }

    .mb-16px {
      margin-bottom: 1rem
    }

    .mb-20px {
      margin-bottom: 1.25rem
    }

    .mb-24px {
      margin-bottom: 1.5rem
    }

    .mb-28px {
      margin-bottom: 1.75rem
    }

    .mb-32px {
      margin-bottom: 2rem
    }

    .mb-36px {
      margin-bottom: 2.25rem
    }

    .mb-40px {
      margin-bottom: 2.5rem
    }

    .mb-48px {
      margin-bottom: 3rem
    }

    .-mb-240 {
      margin-bottom: -15rem
    }

    .-mb-16px {
      margin-bottom: -1rem
    }

    .ml-14 {
      margin-left: 0.875rem
    }

    .ml-4px {
      margin-left: 0.25rem
    }

    .ml-8px {
      margin-left: 0.5rem
    }

    .ml-12px {
      margin-left: 0.75rem
    }

    .ml-16px {
      margin-left: 1rem
    }

    .ml-20px {
      margin-left: 1.25rem
    }

    .ml-24px {
      margin-left: 1.5rem
    }

    .-ml-8px {
      margin-left: -0.5rem
    }

    .block {
      display: block
    }

    .inline-block {
      display: inline-block
    }

    .inline {
      display: inline
    }

    .flex {
      display: flex
    }

    .inline-flex {
      display: inline-flex
    }

    .table {
      display: table
    }

    .flow-root {
      display: flow-root
    }

    .grid {
      display: grid
    }

    .inline-grid {
      display: inline-grid
    }

    .hidden {
      display: none
    }

    .h-60 {
      height: 3.75rem
    }

    .h-64 {
      height: 4rem
    }

    .h-auto {
      height: auto
    }

    .h-0px {
      height: 0
    }

    .h-4px {
      height: 0.25rem
    }

    .h-8px {
      height: 0.5rem
    }

    .h-12px {
      height: 0.75rem
    }

    .h-16px {
      height: 1rem
    }

    .h-20px {
      height: 1.25rem
    }

    .h-24px {
      height: 1.5rem
    }

    .h-32px {
      height: 2rem
    }

    .h-36px {
      height: 2.25rem
    }

    .h-48px {
      height: 3rem
    }

    .h-full {
      height: 100%
    }

    .w-60 {
      width: 3.75rem
    }

    .w-200 {
      width: 12.5rem
    }

    .w-250 {
      width: 15.625rem
    }

    .w-300 {
      width: 18.75rem
    }

    .w-auto {
      width: auto
    }

    .w-0px {
      width: 0
    }

    .w-8px {
      width: 0.5rem
    }

    .w-12px {
      width: 0.75rem
    }

    .w-16px {
      width: 1rem
    }

    .w-20px {
      width: 1.25rem
    }

    .w-24px {
      width: 1.5rem
    }

    .w-28px {
      width: 1.75rem
    }

    .w-32px {
      width: 2rem
    }

    .w-40px {
      width: 2.5rem
    }

    .w-48px {
      width: 3rem
    }

    .w-1\/2 {
      width: 50%
    }

    .w-1\/3 {
      width: 33.333333%
    }

    .w-2\/3 {
      width: 66.666667%
    }

    .w-1\/4 {
      width: 25%
    }

    .w-3\/4 {
      width: 75%
    }

    .w-1\/6 {
      width: 16.666667%
    }

    .w-2\/6 {
      width: 33.333333%
    }

    .w-5\/6 {
      width: 83.333333%
    }

    .w-11\/12 {
      width: 91.666667%
    }

    .w-full {
      width: 100%
    }

    .w-screen {
      width: 100vw
    }

    .w-90px {
      width: 90px
    }

    .min-w-0 {
      min-width: 0
    }

    .min-w-120 {
      min-width: 7.5rem
    }

    .min-w-600 {
      min-width: 37.5rem
    }

    .min-w-full {
      min-width: 100%
    }

    .min-w-1\/3 {
      min-width: 33%
    }

    .max-w-80 {
      max-width: 5rem
    }

    .max-w-210 {
      max-width: 13.125rem
    }

    .max-w-240 {
      max-width: 15rem
    }

    .max-w-300 {
      max-width: 18.75rem
    }

    .max-w-312 {
      max-width: 19.5rem
    }

    .max-w-540 {
      max-width: 33.75rem
    }

    .max-w-740 {
      max-width: 46.25rem
    }

    .max-w-800 {
      max-width: 50rem
    }

    .max-w-960 {
      max-width: 60rem
    }

    .max-w-1280 {
      max-width: 80rem
    }

    .max-w-full {
      max-width: 100%
    }

    .flex-1 {
      flex: 1 1 0%
    }

    .flex-auto {
      flex: 1 1 auto
    }

    .flex-none {
      flex: none
    }

    .flex-shrink-0 {
      flex-shrink: 0
    }

    .flex-shrink {
      flex-shrink: 1
    }

    .flex-grow {
      flex-grow: 1
    }

    .table-fixed {
      table-layout: fixed
    }

    .border-collapse {
      border-collapse: collapse
    }

    .transform {
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .-translate-x-1\/2 {
      --tw-translate-x: -50%
    }

    .rotate-12 {
      --tw-rotate: 12deg
    }

    .rotate-30 {
      --tw-rotate: 30deg
    }

    .rotate-45 {
      --tw-rotate: 45deg
    }

    .rotate-180 {
      --tw-rotate: 180deg
    }

    .hover\:scale-105:hover {
      --tw-scale-x: 1.05;
      --tw-scale-y: 1.05
    }

    .hover\:scale-110:hover {
      --tw-scale-x: 1.1;
      --tw-scale-y: 1.1
    }

    @keyframes spin {
      to {
        transform: rotate(360deg)
      }
    }

    @keyframes ping {

      75%,
      100% {
        transform: scale(2);
        opacity: 0
      }
    }

    @keyframes pulse {
      50% {
        opacity: .5
      }
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(-25%);
        animation-timing-function: cubic-bezier(0.8, 0, 1, 1)
      }

      50% {
        transform: none;
        animation-timing-function: cubic-bezier(0, 0, 0.2, 1)
      }
    }

    .cursor {
      cursor: default
    }

    .cursor-pointer {
      cursor: pointer
    }

    .cursor-not-allowed {
      cursor: not-allowed
    }

    .select-none {
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none
    }

    .select-auto {
      -webkit-user-select: auto;
      -moz-user-select: auto;
      user-select: auto
    }

    .resize {
      resize: both
    }

    .list-outside {
      list-style-position: outside
    }

    .list-none {
      list-style-type: none
    }

    .list-disc {
      list-style-type: disc
    }

    .appearance-none {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none
    }

    .grid-flow-row {
      grid-auto-flow: row
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .grid-cols-3 {
      grid-template-columns: repeat(3, minmax(0, 1fr))
    }

    .grid-cols-5 {
      grid-template-columns: repeat(5, minmax(0, 1fr))
    }

    .flex-row {
      flex-direction: row
    }

    .flex-col {
      flex-direction: column
    }

    .flex-col-reverse {
      flex-direction: column-reverse
    }

    .flex-wrap {
      flex-wrap: wrap
    }

    .place-content-center {
      align-content: center;
      justify-content: center;
      place-content: center
    }

    .place-content-start {
      align-content: start;
      justify-content: start;
      place-content: start
    }

    .place-content-between {
      align-content: space-between;
      justify-content: space-between;
      place-content: space-between
    }

    .place-items-start {
      align-items: start;
      justify-items: start;
      place-items: start
    }

    .place-items-center {
      align-items: center;
      justify-items: center;
      place-items: center
    }

    .items-start {
      align-items: flex-start
    }

    .items-end {
      align-items: flex-end
    }

    .items-center {
      align-items: center
    }

    .items-stretch {
      align-items: stretch
    }

    .justify-end {
      justify-content: flex-end
    }

    .justify-center {
      justify-content: center
    }

    .justify-between {
      justify-content: space-between
    }

    .justify-evenly {
      justify-content: space-evenly
    }

    .gap-16 {
      grid-gap: 1rem;
      gap: 1rem
    }

    .gap-24 {
      grid-gap: 1.5rem;
      gap: 1.5rem
    }

    .gap-12px {
      grid-gap: 0.75rem;
      gap: 0.75rem
    }

    .gap-16px {
      grid-gap: 1rem;
      gap: 1rem
    }

    .gap-20px {
      grid-gap: 1.25rem;
      gap: 1.25rem
    }

    .gap-28px {
      grid-gap: 1.75rem;
      gap: 1.75rem
    }

    .gap-32px {
      grid-gap: 2rem;
      gap: 2rem
    }

    .gap-48px {
      grid-gap: 3rem;
      gap: 3rem
    }

    .gap-x-12 {
      grid-column-gap: 0.75rem;
      -moz-column-gap: 0.75rem;
      column-gap: 0.75rem
    }

    .gap-x-24px {
      grid-column-gap: 1.5rem;
      -moz-column-gap: 1.5rem;
      column-gap: 1.5rem
    }

    .gap-y-6 {
      grid-row-gap: 0.375rem;
      row-gap: 0.375rem
    }

    .gap-y-12 {
      grid-row-gap: 0.75rem;
      row-gap: 0.75rem
    }

    .gap-y-14 {
      grid-row-gap: 0.875rem;
      row-gap: 0.875rem
    }

    .gap-y-20px {
      grid-row-gap: 1.25rem;
      row-gap: 1.25rem
    }

    .space-y-12px>:not([hidden])~ :not([hidden]) {
      --tw-space-y-reverse: 0;
      margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
      margin-bottom: calc(0.75rem * var(--tw-space-y-reverse))
    }

    .divide-y>:not([hidden])~ :not([hidden]) {
      --tw-divide-y-reverse: 0;
      border-top-width: calc(1px * calc(1 - var(--tw-divide-y-reverse)));
      border-bottom-width: calc(1px * var(--tw-divide-y-reverse))
    }

    .divide-gray-300>:not([hidden])~ :not([hidden]) {
      --tw-divide-opacity: 1;
      border-color: rgba(220, 220, 221, var(--tw-divide-opacity))
    }

    .place-self-center {
      align-self: center;
      justify-self: center;
      place-self: center
    }

    .self-start {
      align-self: flex-start
    }

    .self-end {
      align-self: flex-end
    }

    .self-center {
      align-self: center
    }

    .self-stretch {
      align-self: stretch
    }

    .justify-self-center {
      justify-self: center
    }

    .overflow-auto {
      overflow: auto
    }

    .overflow-hidden {
      overflow: hidden
    }

    .overflow-scroll {
      overflow: scroll
    }

    .overflow-x-auto {
      overflow-x: auto
    }

    .overflow-y-hidden {
      overflow-y: hidden
    }

    .overflow-x-scroll {
      overflow-x: scroll
    }

    .whitespace-nowrap {
      white-space: nowrap
    }

    .break-words {
      word-wrap: break-word
    }

    .rounded {
      border-radius: 0.25rem
    }

    .rounded-4px {
      border-radius: 0.25rem
    }

    .rounded-8px {
      border-radius: 0.5rem
    }

    .rounded-full {
      border-radius: 9999px
    }

    .rounded-t-4px {
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem
    }

    .rounded-b {
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem
    }

    .border {
      border-width: 1px
    }

    .border-0px {
      border-width: 0
    }

    .border-1px {
      border-width: 1px
    }

    .border-2px {
      border-width: 2px
    }

    .border-t {
      border-top-width: 1px
    }

    .border-t-1px {
      border-top-width: 1px
    }

    .border-t-4px {
      border-top-width: 4px
    }

    .border-t-8px {
      border-top-width: 8px
    }

    .border-r {
      border-right-width: 1px
    }

    .border-r-1px {
      border-right-width: 1px
    }

    .border-r-8px {
      border-right-width: 8px
    }

    .border-b {
      border-bottom-width: 1px
    }

    .border-b-1px {
      border-bottom-width: 1px
    }

    .border-b-2px {
      border-bottom-width: 2px
    }

    .border-l {
      border-left-width: 1px
    }

    .border-l-0px {
      border-left-width: 0
    }

    .border-l-1px {
      border-left-width: 1px
    }

    .border-l-2px {
      border-left-width: 2px
    }

    .border-l-4px {
      border-left-width: 4px
    }

    .border-solid {
      border-style: solid
    }

    .border-dashed {
      border-style: dashed
    }

    .border-dotted {
      border-style: dotted
    }

    .border-bronze-700 {
      --tw-border-opacity: 1;
      border-color: rgba(176, 102, 10, var(--tw-border-opacity))
    }

    .border-white {
      --tw-border-opacity: 1;
      border-color: rgba(255, 255, 255, var(--tw-border-opacity))
    }

    .border-gold-600 {
      --tw-border-opacity: 1;
      border-color: rgba(255, 184, 28, var(--tw-border-opacity))
    }

    .border-gray-100 {
      --tw-border-opacity: 1;
      border-color: rgba(250, 250, 250, var(--tw-border-opacity))
    }

    .border-gray-200 {
      --tw-border-opacity: 1;
      border-color: rgba(237, 238, 238, var(--tw-border-opacity))
    }

    .border-gray-300 {
      --tw-border-opacity: 1;
      border-color: rgba(220, 220, 221, var(--tw-border-opacity))
    }

    .border-gray-400 {
      --tw-border-opacity: 1;
      border-color: rgba(202, 203, 203, var(--tw-border-opacity))
    }

    .border-gray-500 {
      --tw-border-opacity: 1;
      border-color: rgba(185, 185, 186, var(--tw-border-opacity))
    }

    .border-gray-700 {
      --tw-border-opacity: 1;
      border-color: rgba(138, 140, 142, var(--tw-border-opacity))
    }

    .border-gray-1100 {
      --tw-border-opacity: 1;
      border-color: rgba(28, 29, 32, var(--tw-border-opacity))
    }

    .border-red-700 {
      --tw-border-opacity: 1;
      border-color: rgba(249, 66, 58, var(--tw-border-opacity))
    }

    .border-red-900 {
      --tw-border-opacity: 1;
      border-color: rgba(186, 3, 47, var(--tw-border-opacity))
    }

    .border-green-700 {
      --tw-border-opacity: 1;
      border-color: rgba(67, 176, 42, var(--tw-border-opacity))
    }

    .border-green-1000 {
      --tw-border-opacity: 1;
      border-color: rgba(12, 97, 51, var(--tw-border-opacity))
    }

    .border-orange-600 {
      --tw-border-opacity: 1;
      border-color: rgba(255, 105, 0, var(--tw-border-opacity))
    }

    .border-orange-700 {
      --tw-border-opacity: 1;
      border-color: rgba(231, 87, 16, var(--tw-border-opacity))
    }

    .border-blue-700 {
      --tw-border-opacity: 1;
      border-color: rgba(72, 92, 199, var(--tw-border-opacity))
    }

    .border-blue-1000 {
      --tw-border-opacity: 1;
      border-color: rgba(22, 33, 130, var(--tw-border-opacity))
    }

    .border-purple-600 {
      --tw-border-opacity: 1;
      border-color: rgba(176, 84, 185, var(--tw-border-opacity))
    }

    .border-purple-700 {
      --tw-border-opacity: 1;
      border-color: rgba(152, 30, 151, var(--tw-border-opacity))
    }

    .border-cyan-700 {
      --tw-border-opacity: 1;
      border-color: rgba(0, 149, 200, var(--tw-border-opacity))
    }

    .border-cyan-800 {
      --tw-border-opacity: 1;
      border-color: rgba(38, 128, 183, var(--tw-border-opacity))
    }

    .border-cyan-900 {
      --tw-border-opacity: 1;
      border-color: rgba(0, 107, 166, var(--tw-border-opacity))
    }

    .border-royal-purple-700 {
      --tw-border-opacity: 1;
      border-color: rgba(117, 59, 189, var(--tw-border-opacity))
    }

    .border-royal-purple-800 {
      --tw-border-opacity: 1;
      border-color: rgba(91, 30, 171, var(--tw-border-opacity))
    }

    .border-royal-purple-1100 {
      --tw-border-opacity: 1;
      border-color: rgba(36, 18, 95, var(--tw-border-opacity))
    }

    .border-magenta-700 {
      --tw-border-opacity: 1;
      border-color: rgba(227, 28, 121, var(--tw-border-opacity))
    }

    .border-magenta-900 {
      --tw-border-opacity: 1;
      border-color: rgba(172, 20, 90, var(--tw-border-opacity))
    }

    .hover\:border-gold-500:hover {
      --tw-border-opacity: 1;
      border-color: rgba(251, 204, 85, var(--tw-border-opacity))
    }

    .hover\:border-gray-600:hover {
      --tw-border-opacity: 1;
      border-color: rgba(167, 168, 169, var(--tw-border-opacity))
    }

    .hover\:border-cyan-600:hover {
      --tw-border-opacity: 1;
      border-color: rgba(53, 178, 214, var(--tw-border-opacity))
    }

    .focus\:border-cyan-900:focus {
      --tw-border-opacity: 1;
      border-color: rgba(0, 107, 166, var(--tw-border-opacity))
    }

    .bg-black {
      --tw-bg-opacity: 1;
      background-color: rgba(0, 0, 0, var(--tw-bg-opacity))
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity))
    }

    .bg-gold-200 {
      --tw-bg-opacity: 1;
      background-color: rgba(253, 245, 218, var(--tw-bg-opacity))
    }

    .bg-gold-600 {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 184, 28, var(--tw-bg-opacity))
    }

    .bg-gray-100 {
      --tw-bg-opacity: 1;
      background-color: rgba(250, 250, 250, var(--tw-bg-opacity))
    }

    .bg-gray-200 {
      --tw-bg-opacity: 1;
      background-color: rgba(237, 238, 238, var(--tw-bg-opacity))
    }

    .bg-gray-300 {
      --tw-bg-opacity: 1;
      background-color: rgba(220, 220, 221, var(--tw-bg-opacity))
    }

    .bg-gray-600 {
      --tw-bg-opacity: 1;
      background-color: rgba(167, 168, 169, var(--tw-bg-opacity))
    }

    .bg-gray-800 {
      --tw-bg-opacity: 1;
      background-color: rgba(111, 113, 115, var(--tw-bg-opacity))
    }

    .bg-gray-900 {
      --tw-bg-opacity: 1;
      background-color: rgba(83, 86, 90, var(--tw-bg-opacity))
    }

    .bg-gray-1000 {
      --tw-bg-opacity: 1;
      background-color: rgba(55, 57, 59, var(--tw-bg-opacity))
    }

    .bg-gray-1100 {
      --tw-bg-opacity: 1;
      background-color: rgba(28, 29, 32, var(--tw-bg-opacity))
    }

    .bg-red-200 {
      --tw-bg-opacity: 1;
      background-color: rgba(254, 226, 231, var(--tw-bg-opacity))
    }

    .bg-red-700 {
      --tw-bg-opacity: 1;
      background-color: rgba(249, 66, 58, var(--tw-bg-opacity))
    }

    .bg-red-800 {
      --tw-bg-opacity: 1;
      background-color: rgba(216, 39, 52, var(--tw-bg-opacity))
    }

    .bg-red-900 {
      --tw-bg-opacity: 1;
      background-color: rgba(186, 3, 47, var(--tw-bg-opacity))
    }

    .bg-green-200 {
      --tw-bg-opacity: 1;
      background-color: rgba(227, 246, 216, var(--tw-bg-opacity))
    }

    .bg-green-700 {
      --tw-bg-opacity: 1;
      background-color: rgba(67, 176, 42, var(--tw-bg-opacity))
    }

    .bg-green-900 {
      --tw-bg-opacity: 1;
      background-color: rgba(0, 122, 51, var(--tw-bg-opacity))
    }

    .bg-blue-700 {
      --tw-bg-opacity: 1;
      background-color: rgba(72, 92, 199, var(--tw-bg-opacity))
    }

    .bg-blue-1000 {
      --tw-bg-opacity: 1;
      background-color: rgba(22, 33, 130, var(--tw-bg-opacity))
    }

    .bg-purple-700 {
      --tw-bg-opacity: 1;
      background-color: rgba(152, 30, 151, var(--tw-bg-opacity))
    }

    .bg-purple-900 {
      --tw-bg-opacity: 1;
      background-color: rgba(114, 36, 108, var(--tw-bg-opacity))
    }

    .bg-cyan-200 {
      --tw-bg-opacity: 1;
      background-color: rgba(218, 243, 248, var(--tw-bg-opacity))
    }

    .bg-cyan-700 {
      --tw-bg-opacity: 1;
      background-color: rgba(0, 149, 200, var(--tw-bg-opacity))
    }

    .bg-cyan-900 {
      --tw-bg-opacity: 1;
      background-color: rgba(0, 107, 166, var(--tw-bg-opacity))
    }

    .bg-cyan-1000 {
      --tw-bg-opacity: 1;
      background-color: rgba(23, 83, 129, var(--tw-bg-opacity))
    }

    .bg-royal-purple-700 {
      --tw-bg-opacity: 1;
      background-color: rgba(117, 59, 189, var(--tw-bg-opacity))
    }

    .bg-royal-purple-1000 {
      --tw-bg-opacity: 1;
      background-color: rgba(51, 8, 124, var(--tw-bg-opacity))
    }

    .bg-royal-purple-1100 {
      --tw-bg-opacity: 1;
      background-color: rgba(36, 18, 95, var(--tw-bg-opacity))
    }

    .bg-magenta-700 {
      --tw-bg-opacity: 1;
      background-color: rgba(227, 28, 121, var(--tw-bg-opacity))
    }

    .disabled\:bg-gray-100:disabled {
      --tw-bg-opacity: 1;
      background-color: rgba(250, 250, 250, var(--tw-bg-opacity))
    }

    .hover\:bg-gold-500:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(251, 204, 85, var(--tw-bg-opacity))
    }

    .hover\:bg-gray-200:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(237, 238, 238, var(--tw-bg-opacity))
    }

    .hover\:bg-gray-900:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(83, 86, 90, var(--tw-bg-opacity))
    }

    .hover\:bg-green-600:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(105, 199, 72, var(--tw-bg-opacity))
    }

    .hover\:bg-purple-700:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(152, 30, 151, var(--tw-bg-opacity))
    }

    .hover\:bg-cyan-600:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(53, 178, 214, var(--tw-bg-opacity))
    }

    .hover\:bg-cyan-800:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(38, 128, 183, var(--tw-bg-opacity))
    }

    .bg-opacity-50 {
      --tw-bg-opacity: 0.5
    }

    .bg-opacity-70 {
      --tw-bg-opacity: 0.7
    }

    .bg-gradient-to-t {
      background-image: linear-gradient(to top, var(--tw-gradient-stops))
    }

    .bg-gradient-to-r {
      background-image: linear-gradient(to right, var(--tw-gradient-stops))
    }

    .bg-gradient-to-br {
      background-image: linear-gradient(to bottom right, var(--tw-gradient-stops))
    }

    .bg-gradient-to-b {
      background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
    }

    .from-transparent {
      --tw-gradient-from: transparent;
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(0, 0, 0, 0))
    }

    .from-gray-200 {
      --tw-gradient-from: #EDEEEE;
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(237, 238, 238, 0))
    }

    .from-cyan-700 {
      --tw-gradient-from: #0095C8;
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgba(0, 149, 200, 0))
    }

    .to-gray-200 {
      --tw-gradient-to: #EDEEEE
    }

    .to-cyan-900 {
      --tw-gradient-to: #006BA6
    }

    .bg-cover {
      background-size: cover
    }

    .bg-center {
      background-position: center
    }

    .bg-right-bottom {
      background-position: right bottom
    }

    .bg-no-repeat {
      background-repeat: no-repeat
    }

    .fill-current {
      fill: currentColor
    }

    .object-contain {
      -o-object-fit: contain;
      object-fit: contain
    }

    .object-cover {
      -o-object-fit: cover;
      object-fit: cover
    }

    .p-14 {
      padding: 0.875rem
    }

    .p-20 {
      padding: 1.25rem
    }

    .p-0px {
      padding: 0
    }

    .p-4px {
      padding: 0.25rem
    }

    .p-8px {
      padding: 0.5rem
    }

    .p-12px {
      padding: 0.75rem
    }

    .p-16px {
      padding: 1rem
    }

    .p-20px {
      padding: 1.25rem
    }

    .p-24px {
      padding: 1.5rem
    }

    .p-28px {
      padding: 1.75rem
    }

    .p-32px {
      padding: 2rem
    }

    .p-36px {
      padding: 2.25rem
    }

    .p-48px {
      padding: 3rem
    }

    .px-10 {
      padding-left: 0.625rem;
      padding-right: 0.625rem
    }

    .px-14 {
      padding-left: 0.875rem;
      padding-right: 0.875rem
    }

    .px-24 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .px-0px {
      padding-left: 0;
      padding-right: 0
    }

    .px-4px {
      padding-left: 0.25rem;
      padding-right: 0.25rem
    }

    .px-8px {
      padding-left: 0.5rem;
      padding-right: 0.5rem
    }

    .px-12px {
      padding-left: 0.75rem;
      padding-right: 0.75rem
    }

    .px-16px {
      padding-left: 1rem;
      padding-right: 1rem
    }

    .px-20px {
      padding-left: 1.25rem;
      padding-right: 1.25rem
    }

    .px-24px {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .px-28px {
      padding-left: 1.75rem;
      padding-right: 1.75rem
    }

    .px-32px {
      padding-left: 2rem;
      padding-right: 2rem
    }

    .px-40px {
      padding-left: 2.5rem;
      padding-right: 2.5rem
    }

    .px-48px {
      padding-left: 3rem;
      padding-right: 3rem
    }

    .py-10 {
      padding-top: 0.625rem;
      padding-bottom: 0.625rem
    }

    .py-14 {
      padding-top: 0.875rem;
      padding-bottom: 0.875rem
    }

    .py-20 {
      padding-top: 1.25rem;
      padding-bottom: 1.25rem
    }

    .py-24 {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem
    }

    .py-48 {
      padding-top: 3rem;
      padding-bottom: 3rem
    }

    .py-64 {
      padding-top: 4rem;
      padding-bottom: 4rem
    }

    .py-2px {
      padding-top: 0.125rem;
      padding-bottom: 0.125rem
    }

    .py-4px {
      padding-top: 0.25rem;
      padding-bottom: 0.25rem
    }

    .py-8px {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem
    }

    .py-12px {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem
    }

    .py-16px {
      padding-top: 1rem;
      padding-bottom: 1rem
    }

    .py-20px {
      padding-top: 1.25rem;
      padding-bottom: 1.25rem
    }

    .py-24px {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem
    }

    .py-32px {
      padding-top: 2rem;
      padding-bottom: 2rem
    }

    .py-48px {
      padding-top: 3rem;
      padding-bottom: 3rem
    }

    .pt-12 {
      padding-top: 0.75rem
    }

    .pt-20 {
      padding-top: 1.25rem
    }

    .pt-40 {
      padding-top: 2.5rem
    }

    .pt-60 {
      padding-top: 3.75rem
    }

    .pt-4px {
      padding-top: 0.25rem
    }

    .pt-8px {
      padding-top: 0.5rem
    }

    .pt-12px {
      padding-top: 0.75rem
    }

    .pt-16px {
      padding-top: 1rem
    }

    .pt-20px {
      padding-top: 1.25rem
    }

    .pt-24px {
      padding-top: 1.5rem
    }

    .pt-28px {
      padding-top: 1.75rem
    }

    .pt-32px {
      padding-top: 2rem
    }

    .pt-36px {
      padding-top: 2.25rem
    }

    .pr-28 {
      padding-right: 1.75rem
    }

    .pr-40 {
      padding-right: 2.5rem
    }

    .pr-4px {
      padding-right: 0.25rem
    }

    .pr-8px {
      padding-right: 0.5rem
    }

    .pr-12px {
      padding-right: 0.75rem
    }

    .pr-16px {
      padding-right: 1rem
    }

    .pr-24px {
      padding-right: 1.5rem
    }

    .pb-6 {
      padding-bottom: 0.375rem
    }

    .pb-10 {
      padding-bottom: 0.625rem
    }

    .pb-14 {
      padding-bottom: 0.875rem
    }

    .pb-48 {
      padding-bottom: 3rem
    }

    .pb-60 {
      padding-bottom: 3.75rem
    }

    .pb-64 {
      padding-bottom: 4rem
    }

    .pb-160 {
      padding-bottom: 10rem
    }

    .pb-0px {
      padding-bottom: 0
    }

    .pb-2px {
      padding-bottom: 0.125rem
    }

    .pb-4px {
      padding-bottom: 0.25rem
    }

    .pb-8px {
      padding-bottom: 0.5rem
    }

    .pb-12px {
      padding-bottom: 0.75rem
    }

    .pb-16px {
      padding-bottom: 1rem
    }

    .pb-20px {
      padding-bottom: 1.25rem
    }

    .pb-24px {
      padding-bottom: 1.5rem
    }

    .pb-28px {
      padding-bottom: 1.75rem
    }

    .pb-32px {
      padding-bottom: 2rem
    }

    .pb-36px {
      padding-bottom: 2.25rem
    }

    .pb-48px {
      padding-bottom: 3rem
    }

    .pl-0px {
      padding-left: 0
    }

    .pl-4px {
      padding-left: 0.25rem
    }

    .pl-8px {
      padding-left: 0.5rem
    }

    .pl-12px {
      padding-left: 0.75rem
    }

    .pl-16px {
      padding-left: 1rem
    }

    .pl-20px {
      padding-left: 1.25rem
    }

    .pl-24px {
      padding-left: 1.5rem
    }

    .text-left {
      text-align: left
    }

    .text-center {
      text-align: center
    }

    .text-right {
      text-align: right
    }

    .align-top {
      vertical-align: top
    }

    .align-middle {
      vertical-align: middle
    }

    .align-text-bottom {
      vertical-align: text-bottom
    }

    .font-sans {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
    }

    .font-serif {
      font-family: Georgia, Cambria, Times New Roman, Times, serif
    }

    .text-10 {
      font-size: 0.625rem
    }

    .text-12 {
      font-size: 0.75rem
    }

    .text-14 {
      font-size: 0.875rem
    }

    .text-16 {
      font-size: 1rem
    }

    .text-18 {
      font-size: 1.125rem
    }

    .text-20 {
      font-size: 1.25rem
    }

    .text-24 {
      font-size: 1.5rem
    }

    .text-28 {
      font-size: 1.75rem
    }

    .text-32 {
      font-size: 2rem
    }

    .text-h1 {
      font-size: 3.75rem;
      line-height: 4rem
    }

    .text-h2 {
      font-size: 2.75rem;
      line-height: 3rem
    }

    .text-h3 {
      font-size: 2rem;
      line-height: 2.5rem
    }

    .text-h4 {
      font-size: 1.75rem;
      line-height: 2rem
    }

    .text-h5 {
      font-size: 1.375rem;
      line-height: 1.625rem
    }

    .text-h6 {
      font-size: 1.25rem;
      line-height: 1.5rem
    }

    .text-xl {
      font-size: 1.125rem;
      line-height: 2rem
    }

    .text-lg {
      font-size: 1rem;
      line-height: 1.5rem
    }

    .text-md {
      font-size: 0.875rem;
      line-height: 1.125rem
    }

    .text-sm {
      font-size: 0.75rem;
      line-height: 1rem
    }

    .text-2xl {
      font-size: 1.5rem
    }

    .text-3xl {
      font-size: 1.875rem
    }

    .text-4xl {
      font-size: 2.25rem
    }

    .text-h3-mobile {
      font-size: 1.625rem;
      line-height: 2rem
    }

    .text-h4-mobile {
      font-size: 1.5rem;
      line-height: 1.625rem
    }

    .text-xl-tight {
      font-size: 1.125rem;
      line-height: 1.375rem
    }

    .text-xs {
      font-size: 0.625rem;
      line-height: 0.75rem
    }

    .font-thin {
      font-weight: 200
    }

    .font-normal {
      font-weight: 400
    }

    .font-medium {
      font-weight: 500
    }

    .font-bold {
      font-weight: 700
    }

    .font-light {
      font-weight: 300
    }

    .uppercase {
      text-transform: uppercase
    }

    .italic {
      font-style: italic
    }

    .not-italic {
      font-style: normal
    }

    .leading-10 {
      line-height: 2.5rem
    }

    .leading-none {
      line-height: 1
    }

    .leading-tight {
      line-height: 1.25rem
    }

    .leading-snug {
      line-height: 1.375rem
    }

    .leading-normal {
      line-height: 1.5rem
    }

    .leading-relaxed {
      line-height: 1.625rem
    }

    .leading-relative-1 {
      line-height: 1.1
    }

    .leading-relative-2 {
      line-height: 1.2
    }

    .leading-relative-3 {
      line-height: 1.3
    }

    .leading-relative-4 {
      line-height: 1.4
    }

    .leading-relative-5 {
      line-height: 1.5
    }

    .tracking-tighter {
      letter-spacing: -0.05em
    }

    .tracking-tight {
      letter-spacing: -0.025em
    }

    .tracking-normal {
      letter-spacing: 0
    }

    .text-black {
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, 1);
      color: rgba(0, 0, 0, var(--tw-text-opacity))
    }

    .text-bronze-800 {
      --tw-text-opacity: 1;
      color: rgba(147, 77, 17, 1);
      color: rgba(147, 77, 17, var(--tw-text-opacity))
    }

    .text-white {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .text-gold-600 {
      --tw-text-opacity: 1;
      color: rgba(255, 184, 28, 1);
      color: rgba(255, 184, 28, var(--tw-text-opacity))
    }

    .text-gray-100 {
      --tw-text-opacity: 1;
      color: rgba(250, 250, 250, 1);
      color: rgba(250, 250, 250, var(--tw-text-opacity))
    }

    .text-gray-300 {
      --tw-text-opacity: 1;
      color: rgba(220, 220, 221, 1);
      color: rgba(220, 220, 221, var(--tw-text-opacity))
    }

    .text-gray-500 {
      --tw-text-opacity: 1;
      color: rgba(185, 185, 186, 1);
      color: rgba(185, 185, 186, var(--tw-text-opacity))
    }

    .text-gray-600 {
      --tw-text-opacity: 1;
      color: rgba(167, 168, 169, 1);
      color: rgba(167, 168, 169, var(--tw-text-opacity))
    }

    .text-gray-700 {
      --tw-text-opacity: 1;
      color: rgba(138, 140, 142, 1);
      color: rgba(138, 140, 142, var(--tw-text-opacity))
    }

    .text-gray-800 {
      --tw-text-opacity: 1;
      color: rgba(111, 113, 115, 1);
      color: rgba(111, 113, 115, var(--tw-text-opacity))
    }

    .text-gray-900 {
      --tw-text-opacity: 1;
      color: rgba(83, 86, 90, 1);
      color: rgba(83, 86, 90, var(--tw-text-opacity))
    }

    .text-gray-1000 {
      --tw-text-opacity: 1;
      color: rgba(55, 57, 59, 1);
      color: rgba(55, 57, 59, var(--tw-text-opacity))
    }

    .text-gray-1100 {
      --tw-text-opacity: 1;
      color: rgba(28, 29, 32, 1);
      color: rgba(28, 29, 32, var(--tw-text-opacity))
    }

    .text-red-900 {
      --tw-text-opacity: 1;
      color: rgba(186, 3, 47, 1);
      color: rgba(186, 3, 47, var(--tw-text-opacity))
    }

    .text-green-700 {
      --tw-text-opacity: 1;
      color: rgba(67, 176, 42, 1);
      color: rgba(67, 176, 42, var(--tw-text-opacity))
    }

    .text-green-800 {
      --tw-text-opacity: 1;
      color: rgba(33, 149, 47, 1);
      color: rgba(33, 149, 47, var(--tw-text-opacity))
    }

    .text-green-900 {
      --tw-text-opacity: 1;
      color: rgba(0, 122, 51, 1);
      color: rgba(0, 122, 51, var(--tw-text-opacity))
    }

    .text-green-1000 {
      --tw-text-opacity: 1;
      color: rgba(12, 97, 51, 1);
      color: rgba(12, 97, 51, var(--tw-text-opacity))
    }

    .text-orange-800 {
      --tw-text-opacity: 1;
      color: rgba(207, 69, 32, 1);
      color: rgba(207, 69, 32, var(--tw-text-opacity))
    }

    .text-blue-800 {
      --tw-text-opacity: 1;
      color: rgba(51, 63, 184, 1);
      color: rgba(51, 63, 184, var(--tw-text-opacity))
    }

    .text-blue-900 {
      --tw-text-opacity: 1;
      color: rgba(30, 34, 170, 1);
      color: rgba(30, 34, 170, var(--tw-text-opacity))
    }

    .text-cyan-700 {
      --tw-text-opacity: 1;
      color: rgba(0, 149, 200, 1);
      color: rgba(0, 149, 200, var(--tw-text-opacity))
    }

    .text-cyan-800 {
      --tw-text-opacity: 1;
      color: rgba(38, 128, 183, 1);
      color: rgba(38, 128, 183, var(--tw-text-opacity))
    }

    .text-cyan-900 {
      --tw-text-opacity: 1;
      color: rgba(0, 107, 166, 1);
      color: rgba(0, 107, 166, var(--tw-text-opacity))
    }

    .text-magenta-700 {
      --tw-text-opacity: 1;
      color: rgba(227, 28, 121, 1);
      color: rgba(227, 28, 121, var(--tw-text-opacity))
    }

    .hover\:text-black:hover {
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, 1);
      color: rgba(0, 0, 0, var(--tw-text-opacity))
    }

    .hover\:text-white:hover {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .hover\:text-gray-300:hover {
      --tw-text-opacity: 1;
      color: rgba(220, 220, 221, 1);
      color: rgba(220, 220, 221, var(--tw-text-opacity))
    }

    .hover\:text-gray-1100:hover {
      --tw-text-opacity: 1;
      color: rgba(28, 29, 32, 1);
      color: rgba(28, 29, 32, var(--tw-text-opacity))
    }

    .hover\:text-gray-1200:hover {
      --tw-text-opacity: 1;
      color: rgba(0, 0, 0, 1);
      color: rgba(0, 0, 0, var(--tw-text-opacity))
    }

    .hover\:text-cyan-600:hover {
      --tw-text-opacity: 1;
      color: rgba(53, 178, 214, 1);
      color: rgba(53, 178, 214, var(--tw-text-opacity))
    }

    .hover\:text-cyan-700:hover {
      --tw-text-opacity: 1;
      color: rgba(0, 149, 200, 1);
      color: rgba(0, 149, 200, var(--tw-text-opacity))
    }

    .hover\:text-cyan-800:hover {
      --tw-text-opacity: 1;
      color: rgba(38, 128, 183, 1);
      color: rgba(38, 128, 183, var(--tw-text-opacity))
    }

    .hover\:text-cyan-900:hover {
      --tw-text-opacity: 1;
      color: rgba(0, 107, 166, 1);
      color: rgba(0, 107, 166, var(--tw-text-opacity))
    }

    .underline {
      text-decoration: underline
    }

    .no-underline {
      text-decoration: none
    }

    .hover\:underline:hover {
      text-decoration: underline
    }

    .placeholder-gray-500::-moz-placeholder {
      --tw-placeholder-opacity: 1;
      color: rgba(185, 185, 186, var(--tw-placeholder-opacity))
    }

    .placeholder-gray-500::placeholder {
      --tw-placeholder-opacity: 1;
      color: rgba(185, 185, 186, var(--tw-placeholder-opacity))
    }

    .opacity-0 {
      opacity: 0
    }

    .opacity-10 {
      opacity: 0.1
    }

    .opacity-30 {
      opacity: 0.3
    }

    .opacity-50 {
      opacity: 0.5
    }

    .opacity-70 {
      opacity: 0.7
    }

    .opacity-75 {
      opacity: 0.75
    }

    .opacity-100 {
      opacity: 1
    }

    *,
    ::before,
    ::after {
      --tw-shadow: 0 0 rgba(0, 0, 0, 0)
    }

    .shadow {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .shadow-button {
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .shadow-card {
      --tw-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .shadow-nav {
      --tw-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .focus\:shadow-none:focus {
      --tw-shadow: 0 0 rgba(0, 0, 0, 0);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .focus\:outline-none:focus {
      outline: 2px solid transparent;
      outline-offset: 2px
    }

    *,
    ::before,
    ::after {
      --tw-ring-inset: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgba(159, 174, 229, 0.5);
      --tw-ring-offset-shadow: 0 0 rgba(0, 0, 0, 0);
      --tw-ring-shadow: 0 0 rgba(0, 0, 0, 0)
    }

    .focus\:ring-2:focus {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), 0 0 rgba(0, 0, 0, 0);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 rgba(0, 0, 0, 0))
    }

    .focus\:ring-cyan-400:focus {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgba(143, 221, 234, var(--tw-ring-opacity))
    }

    .focus\:ring-opacity-75:focus {
      --tw-ring-opacity: 0.75
    }

    .filter {
      --tw-blur: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-brightness: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-contrast: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-grayscale: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-hue-rotate: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-invert: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-saturate: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-sepia: var(--tw-empty,
          /*!*/
          /*!*/
        );
      --tw-drop-shadow: var(--tw-empty,
          /*!*/
          /*!*/
        );
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .blur-sm {
      --tw-blur: blur(4px)
    }

    .blur {
      --tw-blur: blur(8px)
    }

    .brightness-75 {
      --tw-brightness: brightness(.75)
    }

    .transition-all {
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .transition {
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .delay-75 {
      transition-delay: 75ms
    }

    .delay-100 {
      transition-delay: 100ms
    }

    .delay-150 {
      transition-delay: 150ms
    }

    .delay-200 {
      transition-delay: 200ms
    }

    .duration-100 {
      transition-duration: 100ms
    }

    .duration-150 {
      transition-duration: 150ms
    }

    .duration-500 {
      transition-duration: 500ms
    }

    .duration-700 {
      transition-duration: 700ms
    }

    .ease-in-out {
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1)
    }

    .sr-only {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0px;
      position: absolute;
      width: 1px
    }

    .tmf-badge {
      border-radius: 0.5rem;
      padding: 0.25rem;
      text-transform: uppercase
    }

    .tmf-button-link {
      display: inline-flex;
      cursor: pointer;
      border-radius: 0.25rem;
      padding-left: 1.25rem;
      padding-right: 1.25rem;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      text-decoration: none
    }

    .tmf-button-link:not([class*="transparent"]):hover {
      text-decoration: none
    }

    .tmf-button-link:not(.tmf-button-link_transparent),
    .tmf-button-link:visited:not(.tmf-button-link_transparent) {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .tmf-button-link:not(.tmf-button-link_transparent),
    .tailwind-article-body .portable-module .tmf-button-link:visited:not(.tmf-button-link_transparent) {
      color: #fff
    }

    .tmf-button-link .tmf-icon {
      margin-right: 0.5rem
    }

    .tmf-button-link_label {
      display: flex;
      justify-content: center;
      align-self: center;
      vertical-align: middle;
      font-weight: 700
    }

    .tmf-button-link_primary {
      --tw-bg-opacity: 1;
      background-color: rgba(0, 149, 200, var(--tw-bg-opacity))
    }

    .tmf-button-link_primary:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(53, 178, 214, var(--tw-bg-opacity))
    }

    .tmf-button-link_secondary {
      --tw-bg-opacity: 1;
      background-color: rgba(72, 92, 199, var(--tw-bg-opacity))
    }

    .tmf-button-link_secondary:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(115, 133, 214, var(--tw-bg-opacity))
    }

    .tmf-button-link_tertiary {
      --tw-bg-opacity: 1;
      background-color: rgba(117, 59, 189, var(--tw-bg-opacity))
    }

    .tmf-button-link_tertiary:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(144, 104, 204, var(--tw-bg-opacity))
    }

    .tmf-button-link_success {
      --tw-bg-opacity: 1;
      background-color: rgba(67, 176, 42, var(--tw-bg-opacity))
    }

    .tmf-button-link_success:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(105, 199, 72, var(--tw-bg-opacity))
    }

    .tmf-button-link_danger {
      --tw-bg-opacity: 1;
      background-color: rgba(249, 66, 58, var(--tw-bg-opacity))
    }

    .tmf-button-link_danger:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(251, 104, 110, var(--tw-bg-opacity))
    }

    .tmf-button-link_neutral {
      --tw-bg-opacity: 1;
      background-color: rgba(167, 168, 169, var(--tw-bg-opacity))
    }

    .tmf-button-link_neutral:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(185, 185, 186, var(--tw-bg-opacity))
    }

    .tmf-button-link_transparent {
      background-color: transparent;
      --tw-text-opacity: 1;
      color: rgba(83, 86, 90, 1);
      color: rgba(83, 86, 90, var(--tw-text-opacity))
    }

    .tmf-button-link_transparent:visited {
      color: text-gray-900
    }

    tmf-button {
      pointer-events: none
    }

    .tmf-button {
      display: flex;
      align-self: center;
      border-radius: 0.25rem;
      padding-left: 1rem;
      padding-right: 1rem;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      font-size: 1rem;
      line-height: 1.5rem;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity));
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms;
      transition-duration: 150ms;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1)
    }

    .tailwind-article-body .portable-module .tmf-button {
      color: #fff
    }

    .tmf-button {
      text-decoration: none;
      pointer-events: all
    }

    .tmf-button:not([disabled]) {
      cursor: pointer
    }

    .tmf-button_small {
      padding-left: 0.75rem;
      padding-right: 0.75rem;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem
    }

    .tmf-button_primary {
      --tw-bg-opacity: 1;
      background-color: rgba(0, 149, 200, var(--tw-bg-opacity))
    }

    .tmf-button_primary:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(53, 178, 214, var(--tw-bg-opacity))
    }

    .tmf-button_secondary {
      --tw-bg-opacity: 1;
      background-color: rgba(72, 92, 199, var(--tw-bg-opacity))
    }

    .tmf-button_secondary:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(115, 133, 214, var(--tw-bg-opacity))
    }

    .tmf-button_tertiary {
      --tw-bg-opacity: 1;
      background-color: rgba(117, 59, 189, var(--tw-bg-opacity))
    }

    .tmf-button_tertiary:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(144, 104, 204, var(--tw-bg-opacity))
    }

    .tmf-button_success {
      --tw-bg-opacity: 1;
      background-color: rgba(67, 176, 42, var(--tw-bg-opacity))
    }

    .tmf-button_success:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(105, 199, 72, var(--tw-bg-opacity))
    }

    .tmf-button_danger {
      --tw-bg-opacity: 1;
      background-color: rgba(249, 66, 58, var(--tw-bg-opacity))
    }

    .tmf-button_danger:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(251, 104, 110, var(--tw-bg-opacity))
    }

    .tmf-button_neutral,
    .tmf-button[disabled] {
      --tw-bg-opacity: 1;
      background-color: rgba(167, 168, 169, var(--tw-bg-opacity))
    }

    .tmf-button_neutral:hover {
      --tw-bg-opacity: 1;
      background-color: rgba(185, 185, 186, var(--tw-bg-opacity))
    }

    .tmf-button[disabled] {
      opacity: 0.5;
      cursor: default
    }

    .tmf-chiclet {
      display: inline-flex;
      height: 2.25rem;
      width: 2.25rem;
      align-items: center;
      justify-content: center;
      white-space: nowrap;
      border-radius: 0.25rem;
      font-size: 0.75rem;
      line-height: 1rem;
      text-transform: uppercase;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity));
      text-decoration: none
    }

    .tailwind-article-body .portable-module .tmf-chiclet {
      color: #fff
    }

    .tmf-chiclet_large {
      height: 3rem;
      width: 3rem;
      --tw-border-opacity: 1;
      border-color: rgba(255, 255, 255, var(--tw-border-opacity));
      font-size: 0.875rem;
      line-height: 1.125rem;
      font-weight: 700;
      border-radius: 11%;
      border-width: 3px
    }

    .tmf-icon {
      display: inline-flex
    }

    .tmf-icon_small {
      height: 1rem;
      width: 1rem;
      font-size: 1rem
    }

    .tmf-icon_large {
      height: 1.5rem;
      width: 1.5rem;
      font-size: 1.375rem;
      line-height: 1.625rem
    }

    .tmf-icon>[class*="fa"] {
      line-height: normal;
      line-height: initial
    }

    .tmf-service-card {
      display: grid;
      min-height: 100%;
      width: 100%;
      overflow: hidden;
      border-radius: 0.5rem;
      border-width: 1px;
      --tw-border-opacity: 1;
      border-color: rgba(185, 185, 186, var(--tw-border-opacity));
      grid-template-rows: min-content
    }

    .tmf-service-card_banner {
      position: relative;
      display: block;
      text-decoration: none;
      height: 50px
    }

    .tmf-service-card_banner:before {
      position: absolute;
      content: '';
      background: url("//g.foolcdn.com/static/ffe/images/product-list-hat.png");
      width: 270px;
      height: 120px;
      left: 0;
      top: -33%;
      background-size: cover
    }

    .tmf-service-card_banner .tmf-chiclet {
      position: absolute;
      z-index: 10;
      top: 18px;
      right: 32px
    }

    .tmf-service-card_title {
      margin-bottom: 0.5rem;
      font-size: 1.25rem;
      line-height: 1.5rem;
      font-weight: 700;
      line-height: 1.3
    }

    .tmf-service-card_title a {
      --tw-text-opacity: 1;
      color: rgba(0, 107, 166, 1);
      color: rgba(0, 107, 166, var(--tw-text-opacity));
      text-decoration: none
    }

    .tmf-service-card_content {
      position: relative;
      --tw-bg-opacity: 1;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
      padding-left: 1rem;
      padding-right: 1rem;
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
      font-size: 0.875rem;
      line-height: 1.125rem;
      --tw-text-opacity: 1;
      color: rgba(83, 86, 90, 1);
      color: rgba(83, 86, 90, var(--tw-text-opacity));
      line-height: 1.5
    }

    .tmf-service-card_content a {
      --tw-text-opacity: 1;
      color: rgba(0, 107, 166, 1);
      color: rgba(0, 107, 166, var(--tw-text-opacity));
      text-decoration: none
    }

    .tmf-service-card_title a:hover,
    .tmf-service-card_content a:hover {
      text-decoration: underline
    }

    .tmf-stockperf {
      display: inline-flex;
      font-size: 0.875rem;
      --tw-text-opacity: 1;
      color: rgba(33, 149, 47, 1);
      color: rgba(33, 149, 47, var(--tw-text-opacity))
    }

    .tmf-stockperf_large {
      font-size: 1.25rem;
      line-height: 1.5rem
    }

    .tmf-stockperf_negative {
      --tw-text-opacity: 1;
      color: rgba(216, 39, 52, 1);
      color: rgba(216, 39, 52, var(--tw-text-opacity))
    }

    [class*="tmf-h1"] {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 2rem;
      line-height: 2.5rem;
      font-weight: 400
    }

    [class*="tmf-h2"] {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 2.25rem;
      font-weight: 400
    }

    [class*="tmf-h3"] {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 1.75rem;
      line-height: 2rem;
      font-weight: 400
    }

    [class*="tmf-h4"] {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 1.75rem;
      font-weight: 400
    }

    [class*="tmf-h5"] {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 1.375rem;
      line-height: 1.625rem;
      font-weight: 400
    }

    [class*="tmf-h6"] {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 1.25rem;
      line-height: 1.5rem;
      font-weight: 400
    }

    .tmf-p,
    [class*="tmf-p_"],
    [class*="tmf-p-"] {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 1rem
    }

    [class*="tmf-p-xl"] {
      font-size: 1.125rem;
      line-height: 2rem
    }

    [class*="tmf-p-md"] {
      font-size: 0.875rem;
      line-height: 1.125rem
    }

    [class*="tmf-p-sm"] {
      font-size: 0.75rem;
      line-height: 1rem
    }

    @media (min-width:48em) {
      [class*="tmf-h1"] {
        font-size: 3.75rem;
        line-height: 4rem
      }

      [class*="tmf-h2"] {
        font-size: 2.75rem;
        line-height: 3rem
      }

      [class*="tmf-h3"] {
        font-size: 2rem;
        line-height: 2.5rem
      }

      [class*="tmf-h4"] {
        font-size: 1.75rem;
        line-height: 2rem
      }
    }

    [class*="_serif"] {
      font-family: Georgia, Cambria, Times New Roman, Times, serif
    }

    [class*="_block"] {
      font-family: Oswald, sans-serif
    }

    [class*="tmf-h1"],
    [class*="tmf-h2"],
    [class*="tmf-h3"],
    [class*="tmf-h6"] {
      line-height: 1.3
    }

    .tmf-p,
    [class*="tmf-p-"],
    [class*="tmf-p_"],
    [class*="tmf-h5"] {
      line-height: 1.5
    }

    [class*="tmf-h4"] {
      line-height: 1.3125
    }

    [class*="tmf-p-sm"] {
      line-height: 1.3333333333
    }

    [class*="tmf-p-xl"] {
      line-height: 1.5555555556
    }

    .tmf-p[class*="_serif"],
    [class*="tmf-p-"][class*="_serif"],
    [class*="tmf-p_"][class*="_serif"] {
      line-height: 2
    }

    [class*="_thin"] {
      font-weight: 200
    }

      {
      font-weight: 200
    }

    [class*="_bold"] {
      font-weight: 700
    }

    [class*="_serif"][class*="_bold"] {
      font-weight: 600
    }

    [class*="tmf-h1"][class*="_block"],
    [class*="tmf-h2"][class*="_block"],
    [class*="tmf-h3"][class*="_block"],
    [class*="tmf-h4"][class*="_block"] {
      text-transform: uppercase
    }

    a {
      --tw-text-opacity: 1;
      color: rgba(0, 107, 166, 1);
      color: rgba(0, 107, 166, var(--tw-text-opacity));
      text-decoration: none
    }

    a.hover {
      --tw-text-opacity: 1;
      color: rgba(23, 83, 129, 1);
      color: rgba(23, 83, 129, var(--tw-text-opacity))
    }

    .article .article-section {
      margin-top: 1.25rem;
      padding-top: 3.75rem
    }

    .article .article-section:first-child {
      margin-top: 1.25rem;
      padding-top: 3.75rem
    }

    .article h2 {
      font-size: 1.5rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(138, 140, 142, 1);
      color: rgba(138, 140, 142, var(--tw-text-opacity))
    }

    .article p,
    .article li,
    .article .article-section table tbody td {
      margin-top: 1.5rem;
      font-size: 1.125rem;
      line-height: 1.625rem;
      --tw-text-opacity: 1;
      color: rgba(138, 140, 142, 1);
      color: rgba(138, 140, 142, var(--tw-text-opacity))
    }

    .article ul,
    .article ol {
      margin-top: 1.5rem
    }

    .article .disclosure p {
      font-size: 0.875rem;
      line-height: 1.625rem;
      --tw-text-opacity: 1;
      color: rgba(185, 185, 186, 1);
      color: rgba(185, 185, 186, var(--tw-text-opacity))
    }

    .general-article .article-section:first-child h2 {
      display: none
    }

    .general-article .article-section:first-child h2+p {
      margin-top: 0
    }

    .article :target::before,
    .rec-article:target::before {
      content: '';
      display: block;
      height: 100px;
      margin-top: -80px
    }

    .recs-back-link {
      line-height: 14px
    }

    .weekly-recs .footer {
      padding-bottom: 15rem
    }

    @media (min-width:40em) {
      .article :target::before {
        height: 20px;
        margin-top: -20px
      }

      .article .article-section {
        margin-top: 3.75rem;
        padding-top: 0
      }

      .article .article-section:first-child {
        margin-top: 1.25rem;
        padding-top: 0
      }

      .weekly-recs .footer {
        padding-bottom: 2rem
      }
    }

    .article .article-section table {
      margin-top: 1.5rem;
      width: 100%
    }

    .article .article-section table thead {
      text-align: left;
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      --tw-text-opacity: 1;
      color: rgba(138, 140, 142, 1);
      color: rgba(138, 140, 142, var(--tw-text-opacity))
    }

    .article .article-section table th,
    .article .article-section table td {
      padding-top: 1rem;
      padding-right: 0.5rem
    }

    .article .article-section .caption {
      font-size: 0.75rem;
      letter-spacing: 0.03em;
      color: rgba(0, 0, 0, 0.38)
    }

    .article .article-section .image {
      float: right;
      width: 50%;
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
      padding-left: 1.5rem
    }

    .article .article-section .image .caption {
      margin-top: 0
    }

    .btn,
    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      display: block
    }

    .btn,
    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      border-color: transparent
    }

    .btn,
    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      border-width: 1px
    }

    .btn,
    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      font-weight: 700
    }

    .btn,
    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      line-height: 1
    }

    .btn,
    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      padding: 0.875rem
    }

    .btn,
    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      border-radius: 0.5rem
    }

    .btn-transparent,
    .btn-transparent-dark,
    .btn-transparent-light {
      transition-property: background-color, border-color, color, fill, stroke;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    a.btn,
    a.btn-transparent,
    a.btn-transparent-dark {
      text-decoration: none
    }

    .btn {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      --tw-bg-opacity: 1;
      background-color: rgba(159, 174, 229, var(--tw-bg-opacity));
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .btn {
      color: #fff
    }

    .btn {
      transition-property: background-color, border-color, color, fill, stroke;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .btn:hover,
    .btn:focus {
      --tw-bg-opacity: 1;
      background-color: rgba(72, 92, 199, var(--tw-bg-opacity))
    }

    .btn:hover,
    .btn:focus {
      border-color: rgba(255, 255, 255, 0.2)
    }

    .btn:hover,
    .btn:focus {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .btn {

      .tailwind-article-body .portable-module &:hover,
      .tailwind-article-body .portable-module &:focus {
        color: #fff
      }
    }

    .btn-transparent {
      --tw-text-opacity: 1;
      color: rgba(183, 194, 236, 1);
      color: rgba(183, 194, 236, var(--tw-text-opacity))
    }

    .btn-transparent:hover,
    .btn-transparent:focus {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .btn-transparent {

      .tailwind-article-body .portable-module &:hover,
      .tailwind-article-body .portable-module &:focus {
        color: #fff
      }
    }

    .btn-transparent-dark {
      --tw-text-opacity: 1;
      color: rgba(159, 174, 229, 1);
      color: rgba(159, 174, 229, var(--tw-text-opacity))
    }

    .btn-transparent-dark:hover,
    .btn-transparent-dark:focus {
      --tw-text-opacity: 1;
      color: rgba(72, 92, 199, 1);
      color: rgba(72, 92, 199, var(--tw-text-opacity))
    }

    .btn-transparent-light {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .btn-transparent-light {
      color: #fff
    }

    .btn-transparent-light:hover,
    .btn-transparent-light:focus {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .btn-transparent-light {

      .tailwind-article-body .portable-module &:hover,
      .tailwind-article-body .portable-module &:focus {
        color: #fff
      }
    }

    .btn-rounded {
      border-radius: 9999px;
      border-width: 2px;
      --tw-border-opacity: 1;
      border-color: rgba(255, 255, 255, var(--tw-border-opacity));
      padding-left: 1.5rem;
      padding-right: 1.5rem;
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      font-size: 0.875rem;
      font-weight: 700;
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .btn-rounded {
      color: #fff
    }

    .btn-rounded {
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .color-hr::before,
    .color-hr-borderless::before {
      --tw-bg-opacity: 1;
      background-color: rgba(159, 174, 229, var(--tw-bg-opacity))
    }

    .color-hr::after,
    .color-hr-borderless::after {}

    .color-hr hr,
    .color-hr-borderless hr {
      margin: 0
    }

    .color-hr hr::before,
    .color-hr-borderless hr::before {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 141, 161, var(--tw-bg-opacity))
    }

    .color-hr hr::after,
    .color-hr-borderless hr::after {
      --tw-bg-opacity: 1;
      background-color: rgba(227, 246, 216, var(--tw-bg-opacity))
    }

    .color-hr {
      border-bottom-width: 1px;
      border-color: rgba(0, 0, 0, 0.16);
      padding-left: 2.5rem
    }

    .color-hr,
    .color-hr-borderless,
    .color-hr hr,
    .color-hr-borderless hr {
      display: flex
    }

    .color-hr,
    .color-hr-borderless,
    .color-hr hr,
    .color-hr-borderless hr {
      align-items: center
    }

    .color-hr::before,
    .color-hr::after,
    .color-hr-borderless::before,
    .color-hr-borderless::after,
    .color-hr hr::before,
    .color-hr hr::after,
    .color-hr-borderless hr::before,
    .color-hr-borderless hr::after {
      content: ''
    }

    .color-hr::before,
    .color-hr::after,
    .color-hr-borderless::before,
    .color-hr-borderless::after,
    .color-hr hr::before,
    .color-hr hr::after,
    .color-hr-borderless hr::before,
    .color-hr-borderless hr::after {
      box-sizing: content-box
    }

    .color-hr::before,
    .color-hr::after,
    .color-hr-borderless::before,
    .color-hr-borderless::after,
    .color-hr hr::before,
    .color-hr hr::after,
    .color-hr-borderless hr::before,
    .color-hr-borderless hr::after {
      display: block
    }

    .color-hr::before,
    .color-hr::after,
    .color-hr-borderless::before,
    .color-hr-borderless::after,
    .color-hr hr::before,
    .color-hr hr::after,
    .color-hr-borderless hr::before,
    .color-hr-borderless hr::after {
      height: 1px;
      width: 2rem
    }

    .color-hr::before,
    .color-hr::after,
    .color-hr-borderless::before,
    .color-hr-borderless::after,
    .color-hr hr::before,
    .color-hr hr::after,
    .color-hr-borderless hr::before,
    .color-hr-borderless hr::after {
      margin-bottom: -1px
    }

    .color-hr::before,
    .color-hr::after,
    .color-hr-borderless::before,
    .color-hr-borderless::after,
    .color-hr hr::before,
    .color-hr hr::after,
    .color-hr-borderless hr::before,
    .color-hr-borderless hr::after {
      border-right-width: 1px;
      border-left-width: 1px;
      --tw-border-opacity: 1;
      border-color: rgba(255, 255, 255, var(--tw-border-opacity))
    }

    .color-hr-logo {
      height: 1px;
      margin-left: 0.75rem;
      margin-right: 0.75rem;
      position: relative
    }

    .color-hr-logo::before,
    .color-hr-logo::after {
      content: ''
    }

    .color-hr-logo::before,
    .color-hr-logo::after {
      position: absolute
    }

    .color-hr-logo::before,
    .color-hr-logo::after {
      bottom: 0
    }

    .color-hr-logo::before,
    .color-hr-logo::after {
      display: block
    }

    .color-hr-logo::before,
    .color-hr-logo::after {
      height: 1px
    }

    .color-hr-logo::before,
    .color-hr-logo::after {
      border-right-width: 1px;
      border-left-width: 1px;
      --tw-border-opacity: 1;
      border-color: rgba(255, 255, 255, var(--tw-border-opacity))
    }

    .color-hr-logo::before {
      left: 0
    }

    .color-hr-logo::after {
      right: 0
    }

    .color-hr-logo::before,
    .color-hr-logo::after {
      width: 25%
    }

    .color-hr-logo::before {
      --tw-bg-opacity: 1;
      background-color: rgba(159, 174, 229, var(--tw-bg-opacity))
    }

    .color-hr-logo::after {}

    .color-hr-logo hr {
      position: absolute;
      bottom: 0;
      display: flex;
      height: 1px;
      left: 25%;
      margin: 0;
      width: 50%
    }

    .color-hr-logo hr::before,
    .color-hr-logo hr::after {
      content: ''
    }

    .color-hr-logo hr::before,
    .color-hr-logo hr::after {
      display: block
    }

    .color-hr-logo hr::before,
    .color-hr-logo hr::after {
      height: 1px
    }

    .color-hr-logo hr::before,
    .color-hr-logo hr::after {
      border-right-width: 1px;
      border-left-width: 1px;
      --tw-border-opacity: 1;
      border-color: rgba(255, 255, 255, var(--tw-border-opacity))
    }

    .color-hr-logo hr::before,
    .color-hr-logo hr::after {
      width: 50%
    }

    .color-hr-logo hr::before {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 141, 161, var(--tw-bg-opacity))
    }

    .color-hr-logo hr::after {
      --tw-bg-opacity: 1;
      background-color: rgba(227, 246, 216, var(--tw-bg-opacity))
    }

    .report-body p {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem
    }

    .report-body h2,
    .report-body h3 {
      margin-top: 2.5rem;
      margin-bottom: 1.25rem;
      font-size: 1.25rem;
      text-transform: uppercase
    }

    .report-body li {
      margin-top: 1.5rem;
      margin-bottom: 1.5rem
    }

    .report-body aside {
      display: none
    }

    small>p {
      font-size: .75rem;
      line-height: 1.375rem
    }

    .multiselect {
      border-radius: 0.5rem;
      position: relative;
      z-index: 10
    }

    .multiselect__tags {
      --tw-bg-opacity: 1;
      background-color: rgba(237, 238, 238, var(--tw-bg-opacity));
      border-width: 1px;
      --tw-border-opacity: 1;
      border-color: rgba(237, 238, 238, var(--tw-border-opacity));
      padding-top: 1rem;
      padding-bottom: 1rem;
      padding-right: 3.5rem;
      padding-left: 1.5rem;
      position: relative;
      border-radius: 0.5rem;
      z-index: 10
    }

    .multiselect__input {
      background-color: transparent;
      padding: 0
    }

    .multiselect__input::-moz-placeholder {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .multiselect__input::placeholder {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .multiselect__placeholder {
      display: block;
      color: rgba(0, 0, 0, 0.38);
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .multiselect__single {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap
    }

    .multiselect__search-icon {
      position: absolute;
      display: flex;
      align-items: center;
      top: 0;
      bottom: 0;
      margin-right: 1.5rem;
      color: rgba(0, 0, 0, 0.38);
      top: 0;
      right: 0;
      z-index: 20
    }

    .multiselect__search-icon svg {
      display: block
    }

    .multiselect__content-wrapper {
      position: absolute;
      display: block;
      overflow: auto;
      left: 0;
      right: 0;
      top: 100%
    }

    .multiselect--above .multiselect__content-wrapper {
      top: auto;
      bottom: 100%
    }

    .multiselect__content {
      box-shadow: 0px 2px 10px rgba(52, 58, 64, 0.08);
      --tw-bg-opacity: 1;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
      border-right-width: 1px;
      border-bottom-width: 1px;
      border-left-width: 1px;
      border-color: rgba(0, 0, 0, 0.16);
      list-style-type: none;
      overflow: hidden;
      padding: 0;
      border-bottom-right-radius: 0.5rem;
      border-bottom-left-radius: 0.5rem;
      width: 100%;
      display: block !important
    }

    .multiselect--above .multiselect__content {
      border-top-width: 1px;
      border-bottom-width: 0;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem
    }

    .multiselect__option {
      cursor: pointer
    }

    .multiselect__option--highlight {
      display: block;
      --tw-bg-opacity: 1;
      background-color: rgba(237, 238, 238, var(--tw-bg-opacity))
    }

    .multiselect--active.multiselect {
      box-shadow: 0px 2px 10px rgba(52, 58, 64, 0.08)
    }

    .multiselect--active .multiselect__search-icon {
      --tw-text-opacity: 1;
      color: rgba(185, 185, 186, 1);
      color: rgba(185, 185, 186, var(--tw-text-opacity))
    }

    .multiselect--active .multiselect__tags {
      --tw-bg-opacity: 1;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
      border-color: rgba(0, 0, 0, 0.16);
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0
    }

    .multiselect--active.multiselect--above .multiselect__tags {
      border-bottom-right-radius: 0.5rem;
      border-bottom-left-radius: 0.5rem;
      border-top-left-radius: 0;
      border-top-right-radius: 0
    }

    .multiselect-full {
      border-radius: 0
    }

    .multiselect-full .multiselect__tags {
      background-color: rgba(0, 0, 0, 0.08);
      border-style: none;
      border-radius: 0
    }

    .multiselect-full .multiselect__content {
      border-style: none;
      border-radius: 0
    }

    .multiselect-full .multiselect__option--highlight {
      background-color: rgba(0, 0, 0, 0.08)
    }

    .multiselect-full.multiselect--active .multiselect__tags {
      --tw-bg-opacity: 1;
      background-color: rgba(237, 238, 238, var(--tw-bg-opacity))
    }

    .add-stock-gizmo .multiselect__tags {
      background-color: rgba(0, 0, 0, 0.16);
      border-color: transparent
    }

    .add-stock-gizmo .multiselect__placeholder {
      color: rgba(255, 255, 255, 0.5)
    }

    .add-stock-gizmo .multiselect__input {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .add-stock-gizmo {
      .tailwind-article-body .portable-module & .multiselect__input {
        color: #fff
      }
    }

    .add-stock-gizmo .multiselect__clear-icon {
      position: absolute;
      top: 0;
      right: 0;
      padding-left: 1.25rem;
      padding-right: 1.25rem;
      z-index: 20;
      padding-top: 18px;
      padding-bottom: 18px
    }

    .add-stock-gizmo .multiselect__content-wrapper {
      position: static;
      max-height: 400px !important;
      overflow-y: auto;
      padding-right: 15px;
      margin-top: 14px;
      scrollbar-color: #80DBFF rgba(0, 0, 0, 0.20);
      scrollbar-width: thin
    }

    .add-stock-gizmo .multiselect__content {
      border-style: none;
      border-radius: 0;
      background-color: transparent;
      --tw-shadow: 0 0 rgba(0, 0, 0, 0);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .add-stock-gizmo .multiselect__option {
      display: block
    }

    .add-stock-gizmo .multiselect__option--highlight {
      background-color: transparent
    }

    .add-stock-gizmo .multiselect__option--highlight .multiselect__option__heading,
    .add-stock-gizmo .multiselect__option--highlight svg {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .add-stock-gizmo .multiselect__option--highlight {

      .tailwind-article-body .portable-module & .multiselect__option__heading,
      .tailwind-article-body .portable-module & svg {
        color: #fff
      }
    }

    .add-stock-gizmo.multiselect--active {
      --tw-shadow: 0 0 rgba(0, 0, 0, 0);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    .add-stock-gizmo.multiselect--active .multiselect__tags {
      border-color: transparent;
      border-radius: 0.5rem
    }

    .add-stock-gizmo ::-webkit-scrollbar {
      background: rgba(0, 0, 0, 0.20);
      border-radius: 5px;
      width: 8px
    }

    .add-stock-gizmo ::-webkit-scrollbar-thumb {
      background: #80DBFF;
      height: 60px;
      border-radius: 5px
    }

    .self-end {
      justify-self: end
    }

    html {
      scroll-behavior: smooth;
      text-rendering: optimizelegibility;
      -webkit-font-smoothing: antialiased;
      line-height: 1.5;
      color: #53565A
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif
    }

    h1 {
      letter-spacing: -1px
    }

    header h1 {
      margin-bottom: 0
    }

    b,
    strong {
      font-weight: bold
    }

    ul,
    ol {
      margin: 0;
      padding: 0;
      list-style-type: none
    }

    hr {
      border-bottom: 1px solid #e8e8e8;
      margin: 1.5em 0
    }

    blockquote {
      background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTUiIGhlaWdodD0iOTAiIHZpZXdCb3g9IjAgMCA5NSA5MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTcuOTIgMC43OTk4MDVDMjQuMzIgMC43OTk4MDUgMjkuMzMzMyAzLjE0NjQ3IDMyLjk2IDcuODM5ODFDMzYuNTg2NyAxMi41MzMxIDM4LjQgMTguNTA2NSAzOC40IDI1Ljc1OThDMzguNCAzMS4wOTMxIDM3LjQ0IDM3LjQ5MzIgMzUuNTIgNDQuOTU5OEMzMy42IDUyLjIxMzIgMzAuNzIgNTkuNzg2NSAyNi44OCA2Ny42Nzk4QzIzLjA0IDc1LjU3MzIgMTguMTMzMyA4Mi44MjY1IDEyLjE2IDg5LjQzOThMNC4xNiA4My4wMzk4QzcuNzg2NjcgNzguNzczMSAxMC44OCA3My43NTk4IDEzLjQ0IDY3Ljk5OThDMTYuMjEzMyA2Mi4yMzk4IDE4LjM0NjcgNTYuMjY2NSAxOS44NCA1MC4wNzk4QzIxLjMzMzMgNDMuNjc5OCAyMi4wOCAzNy43MDY1IDIyLjA4IDMyLjE1OThDMjEuMDEzMyAzMi4zNzMxIDE5Ljg0IDMyLjY5MzEgMTguNTYgMzMuMTE5OEMxNy4yOCAzMy4zMzMxIDE1Ljc4NjcgMzMuNDM5OCAxNC4wOCAzMy40Mzk4QzEwLjAyNjcgMzMuNDM5OCA2LjYxMzMzIDMxLjk0NjUgMy44NCAyOC45NTk4QzEuMjggMjUuOTczMSAwIDIyLjU1OTggMCAxOC43MTk4QzAgMTIuOTU5OCAxLjcwNjY3IDguNTg2NDggNS4xMiA1LjU5OThDOC43NDY2NyAyLjM5OTggMTMuMDEzMyAwLjc5OTgwNSAxNy45MiAwLjc5OTgwNVpNNzQuMjQgMC43OTk4MDVDODAuNjQgMC43OTk4MDUgODUuNjUzMyAzLjE0NjQ3IDg5LjI4IDcuODM5ODFDOTIuOTA2NyAxMi41MzMxIDk0LjcyIDE4LjUwNjUgOTQuNzIgMjUuNzU5OEM5NC43MiAzMS4wOTMxIDkzLjc2IDM3LjQ5MzIgOTEuODQgNDQuOTU5OEM4OS45MiA1Mi4yMTMyIDg3LjA0IDU5Ljc4NjUgODMuMiA2Ny42Nzk4Qzc5LjM2IDc1LjU3MzIgNzQuNDUzMyA4Mi44MjY1IDY4LjQ4IDg5LjQzOThMNjAuNDggODMuMDM5OEM2NC4xMDY3IDc4Ljc3MzEgNjcuMiA3My43NTk4IDY5Ljc2IDY3Ljk5OThDNzIuNTMzMyA2Mi4yMzk4IDc0LjY2NjcgNTYuMjY2NSA3Ni4xNiA1MC4wNzk4Qzc3LjY1MzMgNDMuNjc5OCA3OC40IDM3LjcwNjUgNzguNCAzMi4xNTk4Qzc3LjMzMzMgMzIuMzczMSA3Ni4xNiAzMi42OTMxIDc0Ljg4IDMzLjExOThDNzMuNiAzMy4zMzMxIDcyLjEwNjcgMzMuNDM5OCA3MC40IDMzLjQzOThDNjYuMzQ2NyAzMy40Mzk4IDYyLjkzMzMgMzEuOTQ2NSA2MC4xNiAyOC45NTk4QzU3LjYgMjUuOTczMSA1Ni4zMiAyMi41NTk4IDU2LjMyIDE4LjcxOThDNTYuMzIgMTIuOTU5OCA1OC4wMjY3IDguNTg2NDggNjEuNDQgNS41OTk4QzY1LjA2NjcgMi4zOTk4IDY5LjMzMzMgMC43OTk4MDUgNzQuMjQgMC43OTk4MDVaIiBmaWxsPSIjRjZGNkY2Ii8+PC9zdmc+');
      background-position: top right;
      background-repeat: no-repeat;
      margin-bottom: 2rem;
      border-left-width: 4px;
      --tw-border-opacity: 1;
      border-color: rgba(255, 184, 28, var(--tw-border-opacity));
      padding-left: 1.5rem;
      font-family: Georgia, Cambria, Times New Roman, Times, serif;
      font-size: 1.125rem;
      line-height: 2rem;
      font-style: italic;
      --tw-text-opacity: 1;
      color: rgba(138, 140, 142, 1);
      color: rgba(138, 140, 142, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module p.text-10blockquote {
      font-size: 10px;
      font-style: italic;
      line-height: 1.5;
      margin-bottom: .25rem
    }

    cite {
      font-family: Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-size: 0.875rem;
      line-height: 1.125rem;
      font-style: normal;
      --tw-text-opacity: 1;
      color: rgba(167, 168, 169, 1);
      color: rgba(167, 168, 169, var(--tw-text-opacity))
    }

    .no-tw h2 {
      margin-top: .83em;
      margin-bottom: .83em
    }

    .no-tw h3 {
      margin-top: 1em;
      margin-bottom: 1em
    }

    .no-tw h4 {
      margin-top: 1.33em;
      margin-bottom: 1.33em
    }

    p {
      font-size: 1em;
      line-height: 1.5;
      margin-bottom: 1em
    }

    .font-custom-serif>p>p {
      font-family: "Merriweather", serif;
      font-size: 17px;
      line-height: 1.7
    }

    @media screen and (max-width:768px) {
      .font-custom-serif>p>p {
        font-size: 14px
      }
    }

    .font-custom-serif>p>p {
      margin-top: 1.25rem;
      margin-bottom: 1.25rem
    }

    .font-custom-serif>p>p:first-child {
      margin-top: 0
    }

    .article-call-out-box>* {
      margin-top: 1.25rem;
      margin-bottom: 1.25rem
    }

    .bg-gradient-brand {
      background-image: linear-gradient(45deg, #fafafa, #f3f3f3)
    }

    .premium-container {
      background-clip: padding-box
    }

    .artificial-intelligence-color {
      color: #E31C79
    }

    .augmented-reality-color {
      color: #E31C79
    }

    .blast-off-2020-color {
      color: #753BBD
    }

    .blast-off-color {
      color: #753BBD
    }

    .boss-mode-color {
      color: #43B02A
    }

    .cloud-disruptors-2020-color {
      color: #43B02A
    }

    .everlasting-portfolio-color {
      color: #43B02A
    }

    .explorer-color {
      color: #753BBD
    }

    .fintech-fortunes-color {
      color: #E31C79
    }

    .future-of-entertainment-color {
      color: #E31C79
    }

    .global-partners-color {
      color: #43B02A
    }

    .ipo-trailblazers-color {
      color: #43B02A
    }

    .discovery-long-short-portfolio-color {
      color: #43B02A
    }

    .marijuana-masters {
      color: #E31C79
    }

    .market-pass-color {
      color: #FFB81C
    }

    .discovery-moneymakers-color {
      color: #43B02A
    }

    .one-color {
      color: #FFB81C
    }

    .options-color {
      color: #485CC7
    }

    .discovery-partnership-portfolio-color {
      color: #43B02A
    }

    .premier-pass-color {
      color: #FFB81C
    }

    .rule-breakers-color {
      color: #FF6900
    }

    .rising-stars-color {
      color: #43B02A
    }

    .rule-your-retirement-color {
      color: #485CC7
    }

    .starshot-color {
      color: #753BBD
    }

    .stock-advisor-color {
      color: #0095C8
    }

    .supernova-color {
      color: #753BBD
    }

    .total-income-color {
      color: #485CC7
    }

    .top-stock-color {
      color: #0095C8
    }

    .next-gen-supercycle-color {
      color: #E31C79
    }

    .trend-spotter-color {
      color: #E31C79
    }

    .ownership-portfolio-color {
      color: #43B02A
    }

    .extreme-opportunities-platinum-color {
      color: #E31C79
    }

    .real-estate-winners-color {
      color: #154734
    }

    .mogul-color {
      color: #154734
    }

    .everlasting-stocks-color {
      color: #43B02A
    }

    .stock-advisor-rule-breakers-bundle-color {
      color: #0095C8
    }

    .chiclet:after {
      color: #fff;
      display: flex;
      text-transform: uppercase;
      vertical-align: middle;
      height: 100%;
      justify-content: center;
      align-items: center
    }

    .chiclet-1062 {
      background-color: #485cc7
    }

    .chiclet-1062:after {
      content: "ryr"
    }

    .chiclet-1069 {
      background-color: #cf4520
    }

    .chiclet-1069:after {
      content: "rb"
    }

    .chiclet-1081 {
      background-color: #006ba6
    }

    .chiclet-1081:after {
      content: "sa"
    }

    .chiclet-1228 {
      background-color: #485cc7
    }

    .chiclet-1228:after {
      content: "pro"
    }

    .chiclet-1255 {
      background-color: #ffb81c
    }

    .chiclet-1255:after {
      content: "one"
    }

    .chiclet-1321 {
      background-color: #485cc7
    }

    .chiclet-1321:after {
      content: "opt"
    }

    .chiclet-4003 {
      background-color: #485cc7
    }

    .chiclet-4003:after {
      content: "ti"
    }

    .chiclet-4009 {
      background-color: #007a33
    }

    .chiclet-4009:after {
      content: "nhrs"
    }

    .chiclet-4027 {
      background-color: #ffb81c
    }

    .chiclet-4027:after {
      content: "mp"
    }

    .chiclet-4039 {
      background-color: #007a33
    }

    .chiclet-4039:after {
      content: "rs"
    }

    .chiclet-4053 {
      background-color: #007a33
    }

    .chiclet-4053:after {
      content: "ep"
    }

    .chiclet-4069 {
      background-color: #cf4520
    }

    .chiclet-4069:after {
      content: "cry"
    }

    .chiclet-4076 {
      background-color: #007a33
    }

    .chiclet-4076:after {
      content: "pp"
    }

    .chiclet-4087 {
      background-color: #007a33
    }

    .chiclet-4087:after {
      content: "gp"
    }

    .chiclet-4092 {
      background-color: #cf4520
    }

    .chiclet-4092:after {
      content: "mj"
    }

    .chiclet-4094 {
      background-color: #007a33
    }

    .chiclet-4094:after {
      content: "mm"
    }

    .chiclet-4096 {
      background-color: #007a33
    }

    .chiclet-4096:after {
      content: "ipo"
    }

    .chiclet-4099 {
      background-color: #485cc7
    }

    .chiclet-4099:after {
      content: "up"
    }

    .chiclet-4100 {
      background-color: #154734
    }

    .chiclet-4100:after {
      content: "mog"
    }

    .chiclet-4102 {
      background-color: #cf4520
    }

    .chiclet-4102:after {
      content: "bl19"
    }

    .chiclet-4123 {
      background-color: #cf4520
    }

    .chiclet-4123:after {
      content: "ai"
    }

    .chiclet-4126 {
      background-color: #cf4520
    }

    .chiclet-4126:after {
      content: "ar"
    }

    .chiclet-4135 {
      background-color: #007a33
    }

    .chiclet-4135:after {
      content: "rs20"
    }

    .chiclet-4143 {
      background-color: #cf4520
    }

    .chiclet-4143:after {
      content: "bl20"
    }

    .chiclet-4151 {
      background-color: #007a33
    }

    .chiclet-4151:after {
      content: "cd20"
    }

    .chiclet-4155 {
      background-color: #007a33
    }

    .chiclet-4155:after {
      content: "boss"
    }

    .chiclet-4157 {
      background-color: #cf4520
    }

    .chiclet-4157:after {
      content: "foe"
    }

    .chiclet-4176 {
      background-color: #cf4520
    }

    .chiclet-4176:after {
      content: "ng"
    }

    .chiclet-4177 {
      background-color: #cf4520
    }

    .chiclet-4177:after {
      content: "rbp"
    }

    .chiclet-4189 {
      background-color: #006ba6
    }

    .chiclet-4189:after {
      content: "te"
    }

    .chiclet-4191 {
      background-color: #154734
    }

    .chiclet-4191:after {
      content: "rew"
    }

    .chiclet-4192 {
      background-color: #007a33
    }

    .chiclet-4192:after {
      content: "op"
    }

    .chiclet-4193 {
      background-color: #cf4520
    }

    .chiclet-4193:after {
      content: "tr"
    }

    .chiclet-4198 {
      background-color: #007a33
    }

    .chiclet-4198:after {
      content: "es"
    }

    .chiclet-4209 {
      background-color: #cf4520
    }

    .chiclet-4209:after {
      content: "bl"
    }

    .chiclet-4211 {
      background-color: #cf4520
    }

    .chiclet-4211:after {
      content: "ff"
    }

    .chiclet-4213 {
      background-color: #007a33
    }

    .chiclet-4213:after {
      content: "rs"
    }

    .chiclet-4222 {
      background-color: #cf4520
    }

    .chiclet-4222:after {
      content: "bl21"
    }

    .chiclet-4231 {
      background-color: #007a33
    }

    .chiclet-4231:after {
      content: "ten"
    }

    .chiclet-4253 {
      background-color: #007a33
    }

    .chiclet-4253:after {
      content: "rs21"
    }

    .chiclet-4264 {
      background-color: #154734
    }

    .chiclet-4264:after {
      content: "ret"
    }

    .chiclet-4274 {
      background-color: #ffb81c
    }

    .chiclet-4274:after {
      content: "bst"
    }

    .chiclet-4282 {
      background-color: #cf4520
    }

    .chiclet-4282:after {
      content: "bb"
    }

    .chiclet-4290 {
      background-color: #007a33
    }

    .chiclet-4290:after {
      content: "saas"
    }

    .chiclet-4299 {
      background-color: #006ba6
    }

    .chiclet-4299:after {
      content: "eb"
    }

    .chiclet-4305 {
      background-color: #cf4520
    }

    .chiclet-4305:after {
      content: "ei"
    }

    .chiclet-4311 {
      background-color: #007a33
    }

    .chiclet-4311:after {
      content: "fc"
    }

    .chiclet-4324 {
      background-color: #485cc7
    }

    .chiclet-4324:after {
      content: "de"
    }

    .chiclet-4343 {
      background-color: #007a33
    }

    .chiclet-4343:after {
      content: "vr"
    }

    .chiclet-4344 {
      background-color: #cf4520
    }

    .chiclet-4344:after {
      content: "bl22"
    }

    .chiclet-4346 {
      background-color: #485cc7
    }

    .chiclet-4346:after {
      content: "sd22"
    }

    .chiclet-4426 {
      background-color: #007a33
    }

    .chiclet-4426:after {
      content: "rs22"
    }

    .chiclet-4017 {
      background-color: #0095c8
    }

    .chiclet-4017:after {
      content: "srb"
    }

    .tw.content-container {
      font-family: "Roboto", sans-serif;
      margin: 0;
      max-width: none
    }

    .footer {
      font-family: "Roboto", sans-serif
    }

    .tailwind-article-body h2 {
      font-size: 2rem
    }

    .tailwind-article-body a {
      color: #2680B7
    }

    .tailwind-article-body a:hover {
      color: #35B2D6
    }

    .tailwind-article-body p.caption {
      font-size: .8rem;
      color: #6F7173
    }

    .article-disclosure a {
      color: #2680B7
    }

    .article-disclosure a:hover {
      color: #35B2D6
    }

    .contact-form input[type="text"],
    .contact-form [type="email"],
    .contact-form textarea,
    .contact-form select,
    .password-form input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #DCDCDD;
      border-width: 100%;
      border-radius: 4px;
      background-color: #FAFAFA
    }

    .tailwind-article-body ul,
    .tailwind-article-body ol {
      margin-left: 0;
      padding-left: 0
    }

    .tailwind-article-body ul.errorlist {
      color: #BA032F
    }

    .tailwind-article-body {
      color: #1C1D20
    }

    .tailwind-article-body p,
    .tailwind-article-body ol,
    .tailwind-article-body ul {
      font-size: 1.125rem;
      line-height: 2rem;
      margin-bottom: 1.5rem;
      color: #1C1D20
    }

    .tailwind-article-body h2,
    .tailwind-article-body h3 {
      font-weight: 500;
      color: #1C1D20;
      line-height: 1.2
    }

    .tw .tailwind-article-body ol {
      list-style-type: decimal;
      padding-left: 2.25rem
    }

    .tw .tailwind-article-body ul {
      list-style-type: disc;
      padding-left: 1.75rem
    }

    .tw .tailwind-article-body .company-card-vue-component ul {
      list-style-type: none;
      margin-bottom: 0
    }

    .tw .tailwind-article-body .company-card-vue-component li {
      margin-bottom: 0
    }

    .tw .tailwind-article-body li {
      margin-bottom: 1rem
    }

    .tailwind-article-body .interad {
      margin-bottom: 2rem;
      text-align: center
    }

    .tailwind-article-body .interad:empty {
      margin: 0
    }

    .interad {
      display: flex;
      justify-content: center
    }

    .ad {
      padding: 3% 0;
      text-align: center
    }

    .tw .directory-nav-bar a.active {
      color: #1C1D20;
      background-color: #FFFFFF
    }

    .tw .fixed-definition-navbar-desktop {
      position: fixed;
      top: 100px;
      left: 0;
      right: 0;
      padding-bottom: 16px;
      z-index: 30;
      animation-name: popout;
      animation-duration: 0.4s;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
      background: rgba(252, 252, 252, 1)
    }

    .tw .fixed-definition-navbar-mobile {
      position: fixed;
      top: 56px;
      left: 0;
      right: 0;
      padding: 20px;
      z-index: 30;
      animation-name: popout;
      animation-duration: 0.4s;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
      background: #fafafa
    }

    .tw .definition-list ul {
      -moz-column-count: 1;
      column-count: 1
    }

    @media screen and (min-width:768px) {
      .tw .definition-list ul {
        -moz-column-count: 3;
        column-count: 3
      }
    }

    @media screen and (min-width:1025px) {
      .tw .definition-list ul {
        -moz-column-count: 4;
        column-count: 4
      }
    }

    .generic-page-content p {
      margin-bottom: 2rem
    }

    .generic-page-content h2 {
      margin-top: 3rem
    }

    .generic-page-content h2,
    .generic-page-content h3,
    .generic-page-content h4 {
      margin-bottom: 1.5rem
    }

    .tailwind-article-body .portable-module {
      margin-bottom: 2rem
    }

    .tailwind-article-body .portable-module p {
      font-size: 1rem;
      line-height: 1.5;
      margin-bottom: 1rem
    }

    .tailwind-article-body .portable-module ul {
      margin-bottom: 1rem;
      padding-left: 1.5rem
    }

    .tailwind-article-body .portable-module li {
      margin-bottom: 0;
      font-size: 1rem
    }

    .tailwind-article-body .portable-module .text-white {
      color: #fff
    }

    .tailwind-article-body .portable-module h2 {
      font-size: 0.875rem;
      font-weight: 700
    }

    .tailwind-article-body .portable-module p.text-10.italic {
      font-size: 10px;
      font-style: italic;
      line-height: 1.5;
      margin-bottom: .25rem
    }

    .tailwind-article-body .image.imgR {
      float: right;
      padding-top: 3rem;
      width: 240px
    }

    .tailwind-article-body .new-ad-style:before {
      content: 'Advertisement';
      font-size: 10px;
      color: #53565A;
      position: absolute;
      top: 6px;
      left: 0;
      right: 0;
      margin-left: auto;
      margin-right: auto;
      width: 100%
    }

    @media screen and (max-width:768px) {
      .tailwind-article-body .new-ad-style:before {
        position: static
      }
    }

    .tw .video-wrapper {
      position: relative;
      padding-bottom: 56.25%;
      padding-top: 25px;
      height: 0
    }

    .tw .video-wrapper iframe,
    .tw .video-wrapper object,
    .tw .video-wrapper embed {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%
    }

    .promobox-content p {
      margin: 0 0 0.75em
    }

    .tw #article_sidebar_small-container {
      border-color: rgba(220, 220, 221);
      border-width: 1px;
      box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 4px 4px 10px 0px;
      display: flex;
      padding: 16px
    }

    .tw #article_sidebar_small-container img {
      height: 60px !important;
      margin-right: 16px;
      max-width: none;
      width: 48px !important
    }

    .tw #article_sidebar_small-container .right {
      display: flex;
      flex-direction: column;
      position: relative
    }

    .tw #article_sidebar_small-container h3 {
      font-size: 16px;
      font-weight: 700;
      line-height: 1.25;
      margin-bottom: 0
    }

    .tw #article_sidebar_small-container .cta {
      bottom: 0;
      color: #006ab6;
      display: block;
      font-size: 12px;
      font-weight: normal;
      margin-left: 6.5rem;
      position: absolute
    }

    .tw #article_sidebar_small-container .return {
      bottom: 0;
      color: rgb(0, 122, 51);
      font-size: 12px;
      position: absolute
    }

    .hover-trigger:hover .hover-target-cyan-700 {
      color: #0095C8
    }

    .wagtail-ecap .email {
      margin-bottom: 0.5rem;
      width: 100%;
      border-radius: 0.25rem;
      padding: 1rem;
      font-size: 1.125rem;
      line-height: 1.375rem;
      --tw-shadow: 2px 2px 10px rgba(0, 0, 0, 0.16);
      box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
    }

    @media (min-width:48em) {
      .wagtail-ecap .email {
        margin-bottom: 0;
        width: 50%
      }
    }

    .wagtail-ecap label {
      margin-right: 1rem;
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap label {
        width: 50%
      }
    }

    .wagtail-ecap label .email {
      width: 100%
    }

    .wagtail-ecap label .error {
      margin-bottom: 0.75rem;
      --tw-bg-opacity: 1;
      background-color: rgba(255, 255, 255, var(--tw-bg-opacity));
      padding: 0.5rem;
      font-size: 0.75rem;
      line-height: 1rem;
      font-style: italic;
      --tw-text-opacity: 1;
      color: rgba(186, 3, 47, 1);
      color: rgba(186, 3, 47, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module p.text-10.wagtail-ecap label .error {
      font-size: 10px;
      font-style: italic;
      line-height: 1.5;
      margin-bottom: .25rem
    }

    .wagtail-ecap .foolcom-btn {
      width: 100%
    }

    @media (min-width:48em) {
      .wagtail-ecap .foolcom-btn {
        width: auto
      }
    }

    .wagtail-ecap .disclosure {
      margin-top: 1rem;
      font-size: 0.625rem;
      line-height: 0.75rem;
      font-style: italic
    }

    .tailwind-article-body .portable-module p.text-10.wagtail-ecap .disclosure {
      font-size: 10px;
      font-style: italic;
      line-height: 1.5;
      margin-bottom: .25rem
    }

    .wagtail-ecap.blue-background .disclosure {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .wagtail-ecap.blue-background .disclosure {
      color: #fff
    }

    .wagtail-ecap.blue-background .disclosure a {
      --tw-text-opacity: 1;
      color: rgba(255, 255, 255, 1);
      color: rgba(255, 255, 255, var(--tw-text-opacity))
    }

    .tailwind-article-body .portable-module .wagtail-ecap.blue-background .disclosure a {
      color: #fff
    }

    .wagtail-ecap.gray-background label {
      flex-grow: 1
    }

    .wagtail-ecap.gray-background label .error {
      --tw-bg-opacity: 1;
      background-color: rgba(250, 250, 250, var(--tw-bg-opacity))
    }

    @media (min-width:64em) {
      .foolcom-grid-content-sidebar {
        display: grid;
        grid-template-columns: minmax(0, 880px) minmax(300px, 1fr);
        justify-content: space-between;
        grid-gap: 2rem;
        gap: 2rem
      }
    }

    @media (min-width:80em) {
      .foolcom-grid-content-sidebar {
        grid-gap: 5rem;
        gap: 5rem
      }
    }

    @media (min-width:64em) {
      .foolcom-grid-toc-content-sidebar {
        display: grid;
        grid-template-columns: 148px minmax(0, 768px) 300px;
        justify-content: space-between;
        grid-gap: 2rem;
        gap: 2rem
      }
    }

    .foolcom-grid-toc-content {
      margin-left: auto;
      margin-right: auto;
      max-width: 66.25rem
    }

    @media (min-width:64em) {
      .foolcom-grid-toc-content {
        display: grid;
        grid-template-columns: 148px minmax(0, 880px);
        justify-content: space-between;
        grid-gap: 2rem;
        gap: 2rem
      }
    }

    .foolcom-grid-content-only {
      margin-left: auto;
      margin-right: auto;
      max-width: 55rem
    }

    @media (min-width:40em) {
      .sm\:col-span-2 {
        grid-column: span 2 / span 2
      }

      .sm\:col-span-3 {
        grid-column: span 3 / span 3
      }

      .sm\:col-span-4 {
        grid-column: span 4 / span 4
      }

      .sm\:mx-auto {
        margin-left: auto;
        margin-right: auto
      }

      .sm\:mb-0px {
        margin-bottom: 0
      }

      .sm\:mb-36px {
        margin-bottom: 2.25rem
      }

      .sm\:block {
        display: block
      }

      .sm\:flex {
        display: flex
      }

      .sm\:grid {
        display: grid
      }

      .sm\:w-auto {
        width: auto
      }

      .sm\:w-1\/2 {
        width: 50%
      }

      .sm\:w-full {
        width: 100%
      }

      .sm\:flex-grow {
        flex-grow: 1
      }

      .sm\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .sm\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .sm\:grid-cols-5 {
        grid-template-columns: repeat(5, minmax(0, 1fr))
      }

      .sm\:grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr))
      }

      .sm\:flex-wrap {
        flex-wrap: wrap
      }

      .sm\:items-start {
        align-items: flex-start
      }

      .sm\:gap-16px {
        grid-gap: 1rem;
        gap: 1rem
      }

      .sm\:self-end {
        align-self: flex-end
      }

      .sm\:p-16px {
        padding: 1rem
      }

      .sm\:px-32px {
        padding-left: 2rem;
        padding-right: 2rem
      }

      .sm\:pt-16px {
        padding-top: 1rem
      }

      .sm\:pt-48px {
        padding-top: 3rem
      }

      .sm\:pr-32px {
        padding-right: 2rem
      }

      .sm\:pb-48px {
        padding-bottom: 3rem
      }

      .sm\:pl-0px {
        padding-left: 0
      }

      .sm\:pl-32px {
        padding-left: 2rem
      }

      .sm\:text-h2 {
        font-size: 2.75rem;
        line-height: 3rem
      }

      .sm\:text-h4 {
        font-size: 1.75rem;
        line-height: 2rem
      }

      .sm\:text-xl {
        font-size: 1.125rem;
        line-height: 2rem
      }

      .sm\:text-lg {
        font-size: 1rem;
        line-height: 1.5rem
      }

      .sm\:text-md {
        font-size: 0.875rem;
        line-height: 1.125rem
      }
    }

    @media (min-width:48em) {
      .md\:sticky {
        position: sticky
      }

      .md\:bottom-160 {
        bottom: 10rem
      }

      .md\:col-span-3 {
        grid-column: span 3 / span 3
      }

      .md\:col-span-4 {
        grid-column: span 4 / span 4
      }

      .md\:col-span-5 {
        grid-column: span 5 / span 5
      }

      .md\:col-span-7 {
        grid-column: span 7 / span 7
      }

      .md\:col-span-8 {
        grid-column: span 8 / span 8
      }

      .md\:col-span-9 {
        grid-column: span 9 / span 9
      }

      .md\:col-span-12 {
        grid-column: span 12 / span 12
      }

      .md\:col-start-1 {
        grid-column-start: 1
      }

      .md\:col-start-2 {
        grid-column-start: 2
      }

      .md\:col-end-3 {
        grid-column-end: 3
      }

      .md\:row-span-2 {
        grid-row: span 2 / span 2
      }

      .md\:row-start-1 {
        grid-row-start: 1
      }

      .md\:row-end-2 {
        grid-row-end: 2
      }

      .md\:row-end-3 {
        grid-row-end: 3
      }

      .md\:float-none {
        float: none
      }

      .md\:m-0px {
        margin: 0
      }

      .md\:mx-100 {
        margin-left: 6.25rem;
        margin-right: 6.25rem
      }

      .md\:mx-0px {
        margin-left: 0;
        margin-right: 0
      }

      .md\:mx-4px {
        margin-left: 0.25rem;
        margin-right: 0.25rem
      }

      .md\:-mx-40px {
        margin-left: -2.5rem;
        margin-right: -2.5rem
      }

      .md\:my-0px {
        margin-top: 0;
        margin-bottom: 0
      }

      .md\:my-16px {
        margin-top: 1rem;
        margin-bottom: 1rem
      }

      .md\:my-24px {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem
      }

      .md\:my-36px {
        margin-top: 2.25rem;
        margin-bottom: 2.25rem
      }

      .md\:mt-6 {
        margin-top: 0.375rem
      }

      .md\:mt-0px {
        margin-top: 0
      }

      .md\:mt-16px {
        margin-top: 1rem
      }

      .md\:mt-24px {
        margin-top: 1.5rem
      }

      .md\:mt-28px {
        margin-top: 1.75rem
      }

      .md\:mt-32px {
        margin-top: 2rem
      }

      .md\:mt-36px {
        margin-top: 2.25rem
      }

      .md\:mr-0px {
        margin-right: 0
      }

      .md\:mr-16px {
        margin-right: 1rem
      }

      .md\:mr-24px {
        margin-right: 1.5rem
      }

      .md\:mr-28px {
        margin-right: 1.75rem
      }

      .md\:mr-32px {
        margin-right: 2rem
      }

      .md\:mb-16 {
        margin-bottom: 1rem
      }

      .md\:mb-48 {
        margin-bottom: 3rem
      }

      .md\:mb-60 {
        margin-bottom: 3.75rem
      }

      .md\:mb-64 {
        margin-bottom: 4rem
      }

      .md\:mb-80 {
        margin-bottom: 5rem
      }

      .md\:mb-0px {
        margin-bottom: 0
      }

      .md\:mb-4px {
        margin-bottom: 0.25rem
      }

      .md\:mb-8px {
        margin-bottom: 0.5rem
      }

      .md\:mb-12px {
        margin-bottom: 0.75rem
      }

      .md\:mb-24px {
        margin-bottom: 1.5rem
      }

      .md\:mb-48px {
        margin-bottom: 3rem
      }

      .md\:ml-16 {
        margin-left: 1rem
      }

      .md\:ml-auto {
        margin-left: auto
      }

      .md\:ml-0px {
        margin-left: 0
      }

      .md\:ml-20px {
        margin-left: 1.25rem
      }

      .md\:ml-24px {
        margin-left: 1.5rem
      }

      .md\:block {
        display: block
      }

      .md\:inline-block {
        display: inline-block
      }

      .md\:inline {
        display: inline
      }

      .md\:flex {
        display: flex
      }

      .md\:table-cell {
        display: table-cell
      }

      .md\:grid {
        display: grid
      }

      .md\:hidden {
        display: none
      }

      .md\:h-16px {
        height: 1rem
      }

      .md\:h-24px {
        height: 1.5rem
      }

      .md\:h-48px {
        height: 3rem
      }

      .md\:min-h-130 {
        min-height: 8.125rem
      }

      .md\:w-72 {
        width: 4.5rem
      }

      .md\:w-250 {
        width: 15.625rem
      }

      .md\:w-300 {
        width: 18.75rem
      }

      .md\:w-400 {
        width: 25rem
      }

      .md\:w-auto {
        width: auto
      }

      .md\:w-24px {
        width: 1.5rem
      }

      .md\:w-48px {
        width: 3rem
      }

      .md\:w-1\/2 {
        width: 50%
      }

      .md\:w-1\/3 {
        width: 33.333333%
      }

      .md\:w-2\/3 {
        width: 66.666667%
      }

      .md\:w-1\/4 {
        width: 25%
      }

      .md\:w-3\/4 {
        width: 75%
      }

      .md\:w-full {
        width: 100%
      }

      .md\:min-w-170 {
        min-width: 10.625rem
      }

      .md\:max-w-300 {
        max-width: 18.75rem
      }

      .md\:max-w-880 {
        max-width: 55rem
      }

      .md\:flex-1 {
        flex: 1 1 0%
      }

      .md\:list-inside {
        list-style-position: inside
      }

      .md\:grid-flow-col {
        grid-auto-flow: column
      }

      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .md\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .md\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
      }

      .md\:grid-cols-12 {
        grid-template-columns: repeat(12, minmax(0, 1fr))
      }

      .md\:grid-rows-2 {
        grid-template-rows: repeat(2, minmax(0, 1fr))
      }

      .md\:grid-rows-6-min {
        grid-template-rows: repeat(6, minmax(0, min-content))
      }

      .md\:flex-row {
        flex-direction: row
      }

      .md\:flex-col {
        flex-direction: column
      }

      .md\:flex-nowrap {
        flex-wrap: nowrap
      }

      .md\:place-content-start {
        align-content: start;
        justify-content: start;
        place-content: start
      }

      .md\:place-content-between {
        align-content: space-between;
        justify-content: space-between;
        place-content: space-between
      }

      .md\:place-items-center {
        align-items: center;
        justify-items: center;
        place-items: center
      }

      .md\:items-end {
        align-items: flex-end
      }

      .md\:items-center {
        align-items: center
      }

      .md\:justify-between {
        justify-content: space-between
      }

      .md\:gap-16px {
        grid-gap: 1rem;
        gap: 1rem
      }

      .md\:gap-24px {
        grid-gap: 1.5rem;
        gap: 1.5rem
      }

      .md\:gap-32px {
        grid-gap: 2rem;
        gap: 2rem
      }

      .md\:gap-36px {
        grid-gap: 2.25rem;
        gap: 2.25rem
      }

      .md\:gap-x-24px {
        grid-column-gap: 1.5rem;
        -moz-column-gap: 1.5rem;
        column-gap: 1.5rem
      }

      .md\:gap-x-32px {
        grid-column-gap: 2rem;
        -moz-column-gap: 2rem;
        column-gap: 2rem
      }

      .md\:gap-y-16px {
        grid-row-gap: 1rem;
        row-gap: 1rem
      }

      .md\:self-end {
        align-self: flex-end
      }

      .md\:overflow-auto {
        overflow: auto
      }

      .md\:overflow-x-auto {
        overflow-x: auto
      }

      .md\:border-t-4px {
        border-top-width: 4px
      }

      .md\:border-r {
        border-right-width: 1px
      }

      .md\:border-r-1px {
        border-right-width: 1px
      }

      .md\:border-b-0px {
        border-bottom-width: 0
      }

      .md\:border-l-0px {
        border-left-width: 0
      }

      .md\:border-l-1px {
        border-left-width: 1px
      }

      .md\:border-dotted {
        border-style: dotted
      }

      .md\:border-white {
        --tw-border-opacity: 1;
        border-color: rgba(255, 255, 255, var(--tw-border-opacity))
      }

      .md\:bg-transparent {
        background-color: transparent
      }

      .md\:bg-gradient-to-b {
        background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
      }

      .md\:p-16px {
        padding: 1rem
      }

      .md\:p-24px {
        padding: 1.5rem
      }

      .md\:p-28px {
        padding: 1.75rem
      }

      .md\:px-40 {
        padding-left: 2.5rem;
        padding-right: 2.5rem
      }

      .md\:px-0px {
        padding-left: 0;
        padding-right: 0
      }

      .md\:px-20px {
        padding-left: 1.25rem;
        padding-right: 1.25rem
      }

      .md\:px-28px {
        padding-left: 1.75rem;
        padding-right: 1.75rem
      }

      .md\:px-32px {
        padding-left: 2rem;
        padding-right: 2rem
      }

      .md\:px-40px {
        padding-left: 2.5rem;
        padding-right: 2.5rem
      }

      .md\:py-64 {
        padding-top: 4rem;
        padding-bottom: 4rem
      }

      .md\:py-0px {
        padding-top: 0;
        padding-bottom: 0
      }

      .md\:py-2px {
        padding-top: 0.125rem;
        padding-bottom: 0.125rem
      }

      .md\:py-8px {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem
      }

      .md\:py-12px {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem
      }

      .md\:py-20px {
        padding-top: 1.25rem;
        padding-bottom: 1.25rem
      }

      .md\:py-24px {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem
      }

      .md\:py-32px {
        padding-top: 2rem;
        padding-bottom: 2rem
      }

      .md\:pt-64 {
        padding-top: 4rem
      }

      .md\:pt-0px {
        padding-top: 0
      }

      .md\:pt-4px {
        padding-top: 0.25rem
      }

      .md\:pt-12px {
        padding-top: 0.75rem
      }

      .md\:pt-16px {
        padding-top: 1rem
      }

      .md\:pt-40px {
        padding-top: 2.5rem
      }

      .md\:pt-48px {
        padding-top: 3rem
      }

      .md\:pr-14 {
        padding-right: 0.875rem
      }

      .md\:pr-20 {
        padding-right: 1.25rem
      }

      .md\:pr-80 {
        padding-right: 5rem
      }

      .md\:pr-24px {
        padding-right: 1.5rem
      }

      .md\:pr-32px {
        padding-right: 2rem
      }

      .md\:pr-48px {
        padding-right: 3rem
      }

      .md\:pb-8 {
        padding-bottom: 0.5rem
      }

      .md\:pb-10 {
        padding-bottom: 0.625rem
      }

      .md\:pb-48 {
        padding-bottom: 3rem
      }

      .md\:pb-0px {
        padding-bottom: 0
      }

      .md\:pb-12px {
        padding-bottom: 0.75rem
      }

      .md\:pb-24px {
        padding-bottom: 1.5rem
      }

      .md\:pb-32px {
        padding-bottom: 2rem
      }

      .md\:pl-0px {
        padding-left: 0
      }

      .md\:pl-4px {
        padding-left: 0.25rem
      }

      .md\:pl-8px {
        padding-left: 0.5rem
      }

      .md\:pl-20px {
        padding-left: 1.25rem
      }

      .md\:pl-24px {
        padding-left: 1.5rem
      }

      .md\:pl-36px {
        padding-left: 2.25rem
      }

      .md\:text-left {
        text-align: left
      }

      .md\:text-center {
        text-align: center
      }

      .md\:text-right {
        text-align: right
      }

      .md\:text-18 {
        font-size: 1.125rem
      }

      .md\:text-h1 {
        font-size: 3.75rem;
        line-height: 4rem
      }

      .md\:text-h2 {
        font-size: 2.75rem;
        line-height: 3rem
      }

      .md\:text-h3 {
        font-size: 2rem;
        line-height: 2.5rem
      }

      .md\:text-h4 {
        font-size: 1.75rem;
        line-height: 2rem
      }

      .md\:text-h5 {
        font-size: 1.375rem;
        line-height: 1.625rem
      }

      .md\:text-h6 {
        font-size: 1.25rem;
        line-height: 1.5rem
      }

      .md\:text-lg {
        font-size: 1rem;
        line-height: 1.5rem
      }

      .md\:text-md {
        font-size: 0.875rem;
        line-height: 1.125rem
      }

      .md\:text-4xl {
        font-size: 2.25rem
      }

      .md\:text-h4-mobile {
        font-size: 1.5rem;
        line-height: 1.625rem
      }

      .md\:text-xl-tight {
        font-size: 1.125rem;
        line-height: 1.375rem
      }

      .md\:shadow-card {
        --tw-shadow: 4px 4px 10px rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
      }
    }

    @media (min-width:64em) {
      .lg\:visible {
        visibility: visible
      }

      .lg\:relative {
        position: relative
      }

      .lg\:sticky {
        position: sticky
      }

      .lg\:top-152 {
        top: 9.5rem
      }

      .lg\:top-auto {
        top: auto
      }

      .lg\:col-span-2 {
        grid-column: span 2 / span 2
      }

      .lg\:col-span-3 {
        grid-column: span 3 / span 3
      }

      .lg\:col-span-4 {
        grid-column: span 4 / span 4
      }

      .lg\:col-span-7 {
        grid-column: span 7 / span 7
      }

      .lg\:col-span-8 {
        grid-column: span 8 / span 8
      }

      .lg\:col-span-9 {
        grid-column: span 9 / span 9
      }

      .lg\:col-start-1 {
        grid-column-start: 1
      }

      .lg\:col-start-4 {
        grid-column-start: 4
      }

      .lg\:col-end-4 {
        grid-column-end: 4
      }

      .lg\:col-end-11 {
        grid-column-end: 11
      }

      .lg\:row-start-1 {
        grid-row-start: 1
      }

      .lg\:mx-200 {
        margin-left: 12.5rem;
        margin-right: 12.5rem
      }

      .lg\:mt-40 {
        margin-top: 2.5rem
      }

      .lg\:mt-0px {
        margin-top: 0
      }

      .lg\:mt-16px {
        margin-top: 1rem
      }

      .lg\:mt-32px {
        margin-top: 2rem
      }

      .lg\:mr-8px {
        margin-right: 0.5rem
      }

      .lg\:mr-16px {
        margin-right: 1rem
      }

      .lg\:mr-28px {
        margin-right: 1.75rem
      }

      .lg\:mb-60 {
        margin-bottom: 3.75rem
      }

      .lg\:mb-64 {
        margin-bottom: 4rem
      }

      .lg\:mb-0px {
        margin-bottom: 0
      }

      .lg\:mb-8px {
        margin-bottom: 0.5rem
      }

      .lg\:mb-12px {
        margin-bottom: 0.75rem
      }

      .lg\:mb-20px {
        margin-bottom: 1.25rem
      }

      .lg\:mb-24px {
        margin-bottom: 1.5rem
      }

      .lg\:mb-48px {
        margin-bottom: 3rem
      }

      .lg\:ml-8px {
        margin-left: 0.5rem
      }

      .lg\:ml-24px {
        margin-left: 1.5rem
      }

      .lg\:block {
        display: block
      }

      .lg\:inline {
        display: inline
      }

      .lg\:flex {
        display: flex
      }

      .lg\:grid {
        display: grid
      }

      .lg\:hidden {
        display: none
      }

      .lg\:h-auto {
        height: auto
      }

      .lg\:w-176 {
        width: 11rem
      }

      .lg\:w-1\/3 {
        width: 33.333333%
      }

      .lg\:w-2\/3 {
        width: 66.666667%
      }

      .lg\:w-1\/4 {
        width: 25%
      }

      .lg\:w-3\/4 {
        width: 75%
      }

      .lg\:w-1\/6 {
        width: 16.666667%
      }

      .lg\:w-5\/6 {
        width: 83.333333%
      }

      .lg\:w-7\/12 {
        width: 58.333333%
      }

      .lg\:w-11\/12 {
        width: 91.666667%
      }

      .lg\:w-full {
        width: 100%
      }

      .lg\:max-w-880 {
        max-width: 55rem
      }

      .lg\:max-w-1060 {
        max-width: 66.25rem
      }

      .lg\:max-w-1280 {
        max-width: 80rem
      }

      .lg\:grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
      }

      .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .lg\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
      }

      .lg\:grid-cols-5 {
        grid-template-columns: repeat(5, minmax(0, 1fr))
      }

      .lg\:grid-cols-6 {
        grid-template-columns: repeat(6, minmax(0, 1fr))
      }

      .lg\:grid-cols-12 {
        grid-template-columns: repeat(12, minmax(0, 1fr))
      }

      .lg\:flex-row {
        flex-direction: row
      }

      .lg\:flex-col {
        flex-direction: column
      }

      .lg\:place-content-between {
        align-content: space-between;
        justify-content: space-between;
        place-content: space-between
      }

      .lg\:items-baseline {
        align-items: baseline
      }

      .lg\:gap-24px {
        grid-gap: 1.5rem;
        gap: 1.5rem
      }

      .lg\:gap-48px {
        grid-gap: 3rem;
        gap: 3rem
      }

      .lg\:self-start {
        align-self: flex-start
      }

      .lg\:self-center {
        align-self: center
      }

      .lg\:overflow-hidden {
        overflow: hidden
      }

      .lg\:whitespace-normal {
        white-space: normal
      }

      .lg\:border-t-0px {
        border-top-width: 0
      }

      .lg\:border-l {
        border-left-width: 1px
      }

      .lg\:border-l-1px {
        border-left-width: 1px
      }

      .lg\:border-none {
        border-style: none
      }

      .lg\:p-24px {
        padding: 1.5rem
      }

      .lg\:px-200 {
        padding-left: 12.5rem;
        padding-right: 12.5rem
      }

      .lg\:px-24px {
        padding-left: 1.5rem;
        padding-right: 1.5rem
      }

      .lg\:px-48px {
        padding-left: 3rem;
        padding-right: 3rem
      }

      .lg\:py-28px {
        padding-top: 1.75rem;
        padding-bottom: 1.75rem
      }

      .lg\:pt-40 {
        padding-top: 2.5rem
      }

      .lg\:pt-80 {
        padding-top: 5rem
      }

      .lg\:pt-0px {
        padding-top: 0
      }

      .lg\:pt-12px {
        padding-top: 0.75rem
      }

      .lg\:pr-80 {
        padding-right: 5rem
      }

      .lg\:pr-8px {
        padding-right: 0.5rem
      }

      .lg\:pr-16px {
        padding-right: 1rem
      }

      .lg\:pr-24px {
        padding-right: 1.5rem
      }

      .lg\:pr-28px {
        padding-right: 1.75rem
      }

      .lg\:pr-36px {
        padding-right: 2.25rem
      }

      .lg\:pr-48px {
        padding-right: 3rem
      }

      .lg\:pb-0px {
        padding-bottom: 0
      }

      .lg\:pb-12px {
        padding-bottom: 0.75rem
      }

      .lg\:pb-32px {
        padding-bottom: 2rem
      }

      .lg\:pb-48px {
        padding-bottom: 3rem
      }

      .lg\:pl-24 {
        padding-left: 1.5rem
      }

      .lg\:pl-0px {
        padding-left: 0
      }

      .lg\:pl-8px {
        padding-left: 0.5rem
      }

      .lg\:pl-32px {
        padding-left: 2rem
      }

      .lg\:pl-48px {
        padding-left: 3rem
      }

      .lg\:text-left {
        text-align: left
      }

      .lg\:text-center {
        text-align: center
      }

      .lg\:text-right {
        text-align: right
      }

      .lg\:text-h3 {
        font-size: 2rem;
        line-height: 2.5rem
      }

      .lg\:text-h4 {
        font-size: 1.75rem;
        line-height: 2rem
      }

      .lg\:text-h5 {
        font-size: 1.375rem;
        line-height: 1.625rem
      }

      .lg\:text-xl {
        font-size: 1.125rem;
        line-height: 2rem
      }

      .lg\:text-lg {
        font-size: 1rem;
        line-height: 1.5rem
      }

      .lg\:text-sm {
        font-size: 0.75rem;
        line-height: 1rem
      }

      .lg\:text-h1-tight {
        font-size: 3.25rem;
        line-height: 3.25rem
      }

      .lg\:font-light {
        font-weight: 300
      }

      .lg\:shadow-none {
        --tw-shadow: 0 0 rgba(0, 0, 0, 0);
        box-shadow: 0 0 rgba(0, 0, 0, 0), 0 0 rgba(0, 0, 0, 0), var(--tw-shadow);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-ring-shadow, 0 0 rgba(0, 0, 0, 0)), var(--tw-shadow)
      }
    }

    @media (max-width:1023px) {
      .touchonly\:flex {
        display: flex
      }

      .touchonly\:hidden {
        display: none
      }
    }

    @media (min-width:80em) {
      .xl\:col-span-4 {
        grid-column: span 4 / span 4
      }

      .xl\:col-span-8 {
        grid-column: span 8 / span 8
      }

      .xl\:col-start-1 {
        grid-column-start: 1
      }

      .xl\:col-start-2 {
        grid-column-start: 2
      }

      .xl\:col-end-2 {
        grid-column-end: 2
      }

      .xl\:col-end-3 {
        grid-column-end: 3
      }

      .xl\:row-start-1 {
        grid-row-start: 1
      }

      .xl\:row-end-2 {
        grid-row-end: 2
      }

      .xl\:m-16px {
        margin: 1rem
      }

      .xl\:mb-4px {
        margin-bottom: 0.25rem
      }

      .xl\:block {
        display: block
      }

      .xl\:flex {
        display: flex
      }

      .xl\:grid {
        display: grid
      }

      .xl\:hidden {
        display: none
      }

      .xl\:w-1\/3 {
        width: 33.333333%
      }

      .xl\:w-2\/3 {
        width: 66.666667%
      }

      .xl\:w-3\/4 {
        width: 75%
      }

      .xl\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .xl\:grid-cols-4 {
        grid-template-columns: repeat(4, minmax(0, 1fr))
      }

      .xl\:grid-rows-9-min {
        grid-template-rows: repeat(9, minmax(0, min-content))
      }

      .xl\:items-center {
        align-items: center
      }

      .xl\:gap-80 {
        grid-gap: 5rem;
        gap: 5rem
      }

      .xl\:self-auto {
        align-self: auto
      }

      .xl\:border-r-1px {
        border-right-width: 1px
      }

      .xl\:border-b {
        border-bottom-width: 1px
      }

      .xl\:border-b-0px {
        border-bottom-width: 0
      }

      .xl\:border-gray-300 {
        --tw-border-opacity: 1;
        border-color: rgba(220, 220, 221, var(--tw-border-opacity))
      }

      .xl\:p-16px {
        padding: 1rem
      }

      .xl\:px-0px {
        padding-left: 0;
        padding-right: 0
      }

      .xl\:pr-80 {
        padding-right: 5rem
      }

      .xl\:pr-0px {
        padding-right: 0
      }

      .xl\:pb-0px {
        padding-bottom: 0
      }

      .xl\:pb-16px {
        padding-bottom: 1rem
      }

      .xl\:pl-16px {
        padding-left: 1rem
      }

      .xl\:text-right {
        text-align: right
      }

      .xl\:text-16 {
        font-size: 1rem
      }

      .xl\:text-h1 {
        font-size: 3.75rem;
        line-height: 4rem
      }
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto300-ext.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto300.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto400-ext.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto400.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto500-ext.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto500.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto700-ext.woff2) format('woff2');
      unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(https://g.foolcdn.com/misc-assets/roboto700.woff2) format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }
  </style>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <!-- Livewire style -->
  @livewireStyles
</head>

<body>
@include("components.preloader")
  <div id="app">
    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav me-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
  </nav> --}}


  <style>
    .cl-button {
      border: 1px solid;
      border-radius: 3px;
      cursor: pointer;
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      text-decoration: none;
      transition: background-color .15s linear, color .15s linear
    }

    .cl-button:focus-visible,
    .cl-button:hover {
      text-decoration: none
    }

    .cl-button.-disabled,
    .cl-button:disabled {
      cursor: not-allowed;
      opacity: .5
    }

    .cl-button.-primary {
      background-color: #ff5c35;
      border-color: transparent;
      color: #fff
    }

    .cl-button.-primary:focus-visible,
    .cl-button.-primary:hover {
      background-color: #ffcec2
    }

    .cl-button.-primary:active {
      background-color: #d44325
    }

    .cl-button.-primary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-primary {
      background-color: #1d0cff
    }

    .high-contrast .cl-button.-primary:focus-visible,
    .high-contrast .cl-button.-primary:hover {
      background-color: #cee2ff;
      color: #0c009e
    }

    .cl-button.-primaryDark {
      background-color: #fff;
      border-color: transparent;
      color: #2e475d
    }

    .cl-button.-primaryDark:focus-visible,
    .cl-button.-primaryDark:hover {
      background-color: #f6f9fc
    }

    .cl-button.-primaryDark:active {
      background-color: #eaf0f6
    }

    .cl-button.-primaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-secondary {
      background-color: #fff;
      border-color: #ff5c35;
      color: #ff5c35
    }

    .cl-button.-secondary:focus-visible,
    .cl-button.-secondary:hover {
      background-color: #ffebe6
    }

    .cl-button.-secondary:active {
      background-color: #ffebe6
    }

    .cl-button.-secondary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-secondary {
      background-color: #edf8ff;
      border-color: #180bb1;
      color: #180bb1
    }

    .high-contrast .cl-button.-secondary:focus-visible,
    .high-contrast .cl-button.-secondary:hover {
      background-color: #caebff;
      border-color: #180bb1;
      color: #180bb1
    }

    .cl-button.-secondaryDark {
      background-color: transparent;
      border-color: #fff;
      color: #fff
    }

    .cl-button.-secondaryDark:focus-visible,
    .cl-button.-secondaryDark:hover {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:active {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-tertiary {
      background-color: #3e5974;
      border-color: #3e5974;
      color: #fff
    }

    .cl-button.-tertiary:focus-visible,
    .cl-button.-tertiary:hover {
      background-color: #516f90
    }

    .cl-button.-tertiary:active {
      background-color: #2e475d
    }

    .cl-button.-tertiary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .cl-button.-tertiaryDark {
      background-color: #eaf0f6;
      border-color: #b6c7d6;
      color: #516f90
    }

    .cl-button.-tertiaryDark:focus-visible,
    .cl-button.-tertiaryDark:hover {
      background-color: #f6f9fc;
      border-color: #b6c7d6
    }

    .cl-button.-tertiaryDark:active {
      background-color: #b6c7d6;
      border-color: #7691ad
    }

    .cl-button.-tertiaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-small {
      font-size: .875rem;
      line-height: 1.57;
      padding: .25rem 1rem
    }

    .cl-button.-medium,
    .cl-button.-regular {
      font-size: 1rem;
      line-height: 1.75;
      padding: .5rem 2rem
    }

    .cl-button.-large {
      font-size: 1.125rem;
      line-height: 1.78;
      padding: 1rem 2.5rem
    }

    .home-community-board {
      background-image: linear-gradient(45deg, #0fbfbf, #4fb06d);
      padding: 7rem 0
    }

    .high-contrast .home-community-board {
      background: #2e475d
    }

    @media(max-width:767px) {
      .home-community-board {
        padding: 6rem 0 2.75rem
      }
    }

    .home-community-board__grid-wrapper {
      margin: 30px 0
    }

    @media(min-width:501px) {
      .home-community-board__grid-wrapper {
        display: flex;
        flex-flow: row wrap;
        margin: 80px 0 0
      }
    }

    .home-community-board__grid-item {
      padding: 30px;
      text-align: center
    }

    @media(min-width:1025px) {
      .home-community-board__grid-item {
        flex: 1 1 25%;
        max-width: 25%
      }
    }

    @media(min-width:501px)and (max-width:1024px) {
      .home-community-board__grid-item {
        flex: 1 1 50%;
        max-width: 50%
      }
    }

    @media(min-width:501px) {
      .home-community-board__grid-item {
        border-bottom: 1px solid #fff;
        border-right: 1px solid #fff
      }
    }

    @media(min-width:1025px) {
      .home-community-board__grid-item:nth-child(4n) {
        border-right: 0
      }

      .home-community-board__grid-item:nth-child(n+5) {
        border-bottom: 0
      }
    }

    @media(min-width:501px)and (max-width:1024px) {
      .home-community-board__grid-item:nth-child(2n) {
        border-right: 0
      }

      .home-community-board__grid-item:nth-child(n+7) {
        border-bottom: 0
      }
    }

    .home-community-board__grid-icon {
      bottom: 0;
      left: 0;
      margin: auto;
      max-height: 100%;
      max-width: 150px;
      position: absolute;
      right: 0;
      top: 0
    }

    .home-community-board__grid-icon-wrapper {
      height: 40px;
      margin-bottom: 15px;
      position: relative
    }

    .home-community-board__grid-stat {
      color: #fff;
      display: inline-block;
      font-size: 2.25rem;
      font-weight: 600;
      line-height: 1.38;
      margin: 0 0 5px
    }

    .home-community-board__grid-stat.stat-plus-after {
      padding-right: 10px;
      position: relative
    }

    .home-community-board__grid-stat.stat-plus-after:after {
      color: #fff;
      content: "+";
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      position: absolute;
      right: 0;
      top: 0
    }

    .home-community-board__grid-stat-description {
      color: #fff;
      font-size: 1rem;
      font-weight: 500;
      margin: 0
    }

    .convert-community-board .section-header {
      padding: 0
    }

    .convert-community-board .section-header .hsg-page-width-normal {
      max-width: 802px
    }

    .convert-community-board .home-community-board__grid-wrapper {
      display: flex;
      flex-flow: row wrap;
      justify-content: center;
      margin: 5rem 0 0
    }

    .convert-community-board .home-community-board__grid-item {
      border-bottom: 1px solid #fff;
      border-right: 1px solid #fff;
      flex: 1 1 50%;
      max-width: 50%
    }

    @media(min-width:1025px) {
      .convert-community-board .home-community-board__grid-item {
        flex: 1 1 26%;
        max-width: 26%
      }
    }

    .convert-community-board .home-community-board__grid-item:nth-child(2n) {
      border-right: 0
    }

    @media(min-width:1025px) {
      .convert-community-board .home-community-board__grid-item:nth-child(2n) {
        border-right: 1px solid #fff
      }
    }

    .convert-community-board .home-community-board__grid-item:nth-child(3n) {
      border-right: 1px solid #fff
    }

    @media(min-width:1025px) {
      .convert-community-board .home-community-board__grid-item:nth-child(3n) {
        border-right: 0
      }

      .convert-community-board .home-community-board__grid-item:nth-child(4n) {
        border-bottom: 0;
        border-right: 1px solid #fff
      }
    }

    .convert-community-board .home-community-board__grid-item:nth-child(5n) {
      border-bottom: 0
    }

    @media(min-width:1025px) {
      .convert-community-board .home-community-board__grid-item:nth-child(5n) {
        border-right: 1px solid #fff
      }
    }

    .convert-community-board .home-community-board__grid-item:nth-child(6n) {
      border-bottom: 0;
      border-right: 0
    }

    @media(min-width:1025px) {
      .convert-community-board .home-community-board__grid-item:nth-child(6n) {
        border-bottom: 0;
        border-right: 0
      }
    }

    .convert-community-board .home-community-board__grid-stat {
      font-size: 2.25rem
    }

    .convert-community-board .home-community-board__grid-stat:after {
      font-size: 1.125rem;
      font-weight: 600;
      position: relative
    }

    .cl-button {
      border: 1px solid;
      border-radius: 3px;
      cursor: pointer;
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      text-decoration: none;
      transition: background-color .15s linear, color .15s linear
    }

    .cl-button:focus-visible,
    .cl-button:hover {
      text-decoration: none
    }

    .cl-button.-disabled,
    .cl-button:disabled {
      cursor: not-allowed;
      opacity: .5
    }

    .cl-button.-primary {
      background-color: #ff5c35;
      border-color: transparent;
      color: #fff
    }

    .cl-button.-primary:focus-visible,
    .cl-button.-primary:hover {
      background-color: #ffcec2
    }

    .cl-button.-primary:active {
      background-color: #d44325
    }

    .cl-button.-primary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-primary {
      background-color: #1d0cff
    }

    .high-contrast .cl-button.-primary:focus-visible,
    .high-contrast .cl-button.-primary:hover {
      background-color: #cee2ff;
      color: #0c009e
    }

    .cl-button.-primaryDark {
      background-color: #fff;
      border-color: transparent;
      color: #2e475d
    }

    .cl-button.-primaryDark:focus-visible,
    .cl-button.-primaryDark:hover {
      background-color: #f6f9fc
    }

    .cl-button.-primaryDark:active {
      background-color: #eaf0f6
    }

    .cl-button.-primaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-secondary {
      background-color: #fff;
      border-color: #ff5c35;
      color: #ff5c35
    }

    .cl-button.-secondary:focus-visible,
    .cl-button.-secondary:hover {
      background-color: #ffebe6
    }

    .cl-button.-secondary:active {
      background-color: #ffebe6
    }

    .cl-button.-secondary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-secondary {
      background-color: #edf8ff;
      border-color: #180bb1;
      color: #180bb1
    }

    .high-contrast .cl-button.-secondary:focus-visible,
    .high-contrast .cl-button.-secondary:hover {
      background-color: #caebff;
      border-color: #180bb1;
      color: #180bb1
    }

    .cl-button.-secondaryDark {
      background-color: transparent;
      border-color: #fff;
      color: #fff
    }

    .cl-button.-secondaryDark:focus-visible,
    .cl-button.-secondaryDark:hover {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:active {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-tertiary {
      background-color: #3e5974;
      border-color: #3e5974;
      color: #fff
    }

    .cl-button.-tertiary:focus-visible,
    .cl-button.-tertiary:hover {
      background-color: #516f90
    }

    .cl-button.-tertiary:active {
      background-color: #2e475d
    }

    .cl-button.-tertiary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .cl-button.-tertiaryDark {
      background-color: #eaf0f6;
      border-color: #b6c7d6;
      color: #516f90
    }

    .cl-button.-tertiaryDark:focus-visible,
    .cl-button.-tertiaryDark:hover {
      background-color: #f6f9fc;
      border-color: #b6c7d6
    }

    .cl-button.-tertiaryDark:active {
      background-color: #b6c7d6;
      border-color: #7691ad
    }

    .cl-button.-tertiaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-small {
      font-size: .875rem;
      line-height: 1.57;
      padding: .25rem 1rem
    }

    .cl-button.-medium,
    .cl-button.-regular {
      font-size: 1rem;
      line-height: 1.75;
      padding: .5rem 2rem
    }

    .cl-button.-large {
      font-size: 1.125rem;
      line-height: 1.78;
      padding: 1rem 2.5rem
    }

    .home-customers {
      padding-top: 100px
    }

    @media(max-width:767px) {
      .home-customers {
        padding: 50px 0 0
      }
    }

    @media(min-width:768px) {
      .home-customers__content-wrapper {
        align-items: center;
        display: flex;
        flex-flow: row nowrap;
        justify-content: space-between
      }
    }

    .home-customers__text-wrapper {
      margin-right: 1rem;
      width: 33%
    }

    @media(max-width:767px) {
      .home-customers__text-wrapper {
        text-align: center;
        width: 100%
      }
    }

    .home-customers__stat {
      font-size: 2.25rem;
      margin: 0 0 5px
    }

    .home-customers__stat-description {
      font-size: 1.125rem;
      letter-spacing: .02rem;
      margin-top: 0
    }

    @media(min-width:768px) {
      .home-customers__stat-description {
        margin-bottom: 0
      }
    }

    .home-customers__logos-grid {
      align-items: center;
      display: flex;
      flex-flow: row wrap;
      justify-content: center
    }

    @media(min-width:768px) {
      .home-customers__logos-grid {
        max-width: 600px
      }
    }

    .home-customers__logo {
      max-height: 100%;
      width: 100%
    }

    .home-customers__logo-wrapper {
      flex: 1 1 50%;
      padding: 20px;
      text-align: center
    }

    @media(min-width:501px) {
      .home-customers__logo-wrapper {
        flex: 1 1 25%
      }
    }

    .convert-customers .home-customers {
      padding: 3em 0
    }

    .convert-customers .home-customers__content-wrapper {
      flex-flow: row wrap
    }

    @media(min-width:768px) {
      .convert-customers .home-customers__content-wrapper {
        flex-flow: column
      }
    }

    .convert-customers .home-customers__text-wrapper {
      margin: 0 auto;
      max-width: 78%;
      text-align: center
    }

    @media(min-width:501px) {
      .convert-customers .home-customers__text-wrapper {
        max-width: 100%;
        width: 100%
      }
    }

    .convert-customers .home-customers__stat {
      display: none
    }

    .convert-customers .home-customers__stat-description {
      font-size: 1.375rem;
      font-weight: 600;
      margin: 2em 0
    }

    .convert-customers .home-customers__stat-description strong {
      font-size: 2rem;
      font-weight: 600
    }

    .convert-customers .home-customers__logos-grid {
      max-width: 100%
    }

    @media(min-width:501px) {
      .convert-customers .home-customers__logos-grid {
        flex-flow: row
      }
    }

    .csol-cta-content-block .csol-cta-content-block-header {
      font-size: 1.5rem;
      font-weight: 500;
      line-height: 1.42
    }

    .csol-cta-content-block {
      padding-left: 16px;
      padding-right: 16px;
      position: relative
    }

    .csol-cta-content-block .csol-cta-content-block-container {
      display: flex;
      flex-direction: column
    }

    @media(min-width:600px) {
      .csol-cta-content-block .csol-cta-content-block-container {
        align-items: center;
        flex-direction: row;
        justify-content: space-between
      }
    }

    .csol-cta-content-block .csol-cta-content-block-image {
      display: block;
      margin: 0 auto;
      max-width: 300px;
      order: -1;
      padding: 0 24px
    }

    @media(min-width:600px) {
      .csol-cta-content-block .csol-cta-content-block-image {
        flex: 1 0 240px;
        margin: 0;
        max-width: none;
        order: 1;
        padding: 0;
        width: 240px
      }
    }

    @media(min-width:900px) {
      .csol-cta-content-block .csol-cta-content-block-image {
        flex: 0 1 340px;
        width: 340px
      }
    }

    .csol-cta-content-block .csol-cta-content-block-image img {
      display: block;
      width: 100%
    }

    .csol-cta-content-block .csol-cta-content-block-content {
      max-width: 620px;
      position: relative
    }

    @media(min-width:600px) {
      .csol-cta-content-block .csol-cta-content-block-content {
        margin-right: 25px
      }
    }

    .csol-cta-content-block .csol-cta-content-block-description,
    .csol-cta-content-block .csol-cta-content-block-header {
      margin-top: 16px
    }

    .csol-cta-content-block .csol-cta-content-block-buttons {
      align-items: flex-start;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      margin-top: 24px
    }

    @media(min-width:900px) {
      .csol-cta-content-block .csol-cta-content-block-buttons {
        align-items: center;
        flex-direction: row
      }

      .csol-cta-content-block .csol-cta-content-block-buttons>.csol-cta-content-block-button:first-child {
        margin-right: 24px
      }
    }

    .csol-cta-content-block .csol-cta-content-block-buttons .csol-cta-content-block-button {
      margin-bottom: 16px;
      text-align: center;
      width: 100%
    }

    @media(min-width:600px) {
      .csol-cta-content-block .csol-cta-content-block-buttons .csol-cta-content-block-button {
        text-align: center;
        width: auto
      }
    }

    .csol-cta-content-block .csol-cta-content-block-disclaimer {
      font-size: .875rem;
      line-height: 1.57
    }
  </style>

  <style>
    .home-products-feature__card--headline {
      font-size: 1.5rem;
      font-weight: 500;
      line-height: 1.42
    }

    .home-products-feature__card--heading>a {
      color: #0b8484;
      font-weight: 500
    }

    .home-products-feature__card--heading {
      font-size: 1rem;
      font-weight: 300;
      line-height: 1.75
    }

    .cl-button,
    .home-products-feature__card {
      border: 1px solid;
      border-radius: 3px
    }

    .cl-button {
      cursor: pointer;
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      text-decoration: none;
      transition: background-color .15s linear, color .15s linear
    }

    .cl-button:focus-visible,
    .cl-button:hover {
      text-decoration: none
    }

    .cl-button.-disabled,
    .cl-button:disabled {
      cursor: not-allowed;
      opacity: .5
    }

    .cl-button.-primary {
      background-color: #05023a;
      border-color: transparent;
      color: #fff
    }

    .cl-button.-primary:focus-visible,
    .cl-button.-primary:hover {
      background-color: #ffcec2
    }

    .cl-button.-primary:active {
      background-color: #080119
    }

    .cl-button.-primary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-primary {
      background-color: #040131
    }

    .high-contrast .cl-button.-primary:focus-visible,
    .high-contrast .cl-button.-primary:hover {
      background-color: #cee2ff;
      color: #0c009e
    }

    .cl-button.-primaryDark {
      background-color: #fff;
      border-color: transparent;
      color: #2e475d
    }

    .cl-button.-primaryDark:focus-visible,
    .cl-button.-primaryDark:hover {
      background-color: #f6f9fc
    }

    .cl-button.-primaryDark:active {
      background-color: #eaf0f6
    }

    .cl-button.-primaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-secondary {
      background-color: #fff;
      border-color: #ff5c35;
      color: #ff5c35
    }

    .cl-button.-secondary:focus-visible,
    .cl-button.-secondary:hover {
      background-color: #ffebe6
    }

    .cl-button.-secondary:active {
      background-color: #ffebe6
    }

    .cl-button.-secondary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-secondary {
      background-color: #edf8ff;
      border-color: #180bb1;
      color: #180bb1
    }

    .high-contrast .cl-button.-secondary:focus-visible,
    .high-contrast .cl-button.-secondary:hover {
      background-color: #caebff;
      border-color: #180bb1;
      color: #180bb1
    }

    .cl-button.-secondaryDark {
      background-color: transparent;
      border-color: #fff;
      color: #fff
    }

    .cl-button.-secondaryDark:focus-visible,
    .cl-button.-secondaryDark:hover {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:active {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-tertiary {
      background-color: #3e5974;
      border-color: #3e5974;
      color: #fff
    }

    .cl-button.-tertiary:focus-visible,
    .cl-button.-tertiary:hover {
      background-color: #516f90
    }

    .cl-button.-tertiary:active {
      background-color: #2e475d
    }

    .cl-button.-tertiary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .cl-button.-tertiaryDark {
      background-color: #eaf0f6;
      border-color: #b6c7d6;
      color: #516f90
    }

    .cl-button.-tertiaryDark:focus-visible,
    .cl-button.-tertiaryDark:hover {
      background-color: #f6f9fc;
      border-color: #b6c7d6
    }

    .cl-button.-tertiaryDark:active {
      background-color: #b6c7d6;
      border-color: #7691ad
    }

    .cl-button.-tertiaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-small {
      font-size: .875rem;
      line-height: 1.57;
      padding: .25rem 1rem
    }

    .cl-button.-medium,
    .cl-button.-regular {
      font-size: 1rem;
      line-height: 1.75;
      padding: .5rem 2rem
    }

    .cl-button.-large {
      font-size: 1.125rem;
      line-height: 1.78;
      padding: 1rem 2.5rem
    }

    :root {
      --home-products-feature-icon-color: #ff5c35
    }

    .high-contrast {
      --home-products-feature-icon-color: #1d0cff
    }

    .home-growth-stack {
      padding: 4.375rem 0
    }

    .home-growth-stack .home-growth-stack__logo-wrapper {
      margin: 0 auto 2rem;
      max-width: 100%;
      padding: 0 2rem;
      text-align: left;
      width: 802px
    }

    @media(min-width:768px) {
      .home-growth-stack .home-growth-stack__logo-wrapper {
        padding: 0
      }
    }

    @media(min-width:1025px) {
      .home-growth-stack .home-growth-stack__logo-wrapper {
        margin: 0 auto 3.5rem
      }
    }

    .home-growth-stack .home-growth-stack__logo-wrapper img {
      max-width: 260px
    }

    .home-growth-stack .home-growth-stack__logo-header {
      margin-bottom: 1.25rem;
      margin-top: 0;
      text-align: left
    }

    @media(min-width:768px) {
      .home-growth-stack .home-growth-stack__logo-header {
        margin-bottom: 1.875rem;
        text-align: center
      }
    }

    .home-growth-stack .home-growth-stack__logo-description {
      font-size: 1rem;
      margin-bottom: 0
    }

    @media(min-width:768px) {
      .home-growth-stack .home-growth-stack__logo-description {
        padding: 0 2rem
      }
    }

    .home-growth-stack .home-growth-stack__ctas {
      margin-top: 1.875rem;
      transition: transform .3s;
      width: 100%
    }

    @media(min-width:501px) {
      .home-growth-stack .home-growth-stack__ctas {
        display: flex;
        justify-content: center
      }
    }

    @media(min-width:768px) {
      .home-growth-stack .home-growth-stack__ctas {
        margin-top: 1.25rem
      }
    }

    .home-growth-stack .home-growth-stack__ctas a {
      font-size: .875rem;
      padding: .4rem 1.7rem;
      width: 100%
    }

    @media(min-width:501px) {
      .home-growth-stack .home-growth-stack__ctas a {
        width: 48%
      }
    }

    @media(min-width:768px) {
      .home-growth-stack .home-growth-stack__ctas a {
        width: auto
      }
    }

    .home-growth-stack .home-growth-stack__ctas .cta--secondary {
      margin-bottom: .5rem
    }

    @media(min-width:501px) {

      .home-growth-stack .home-growth-stack__ctas .cta--primary,
      .home-growth-stack .home-growth-stack__ctas .cta--secondary {
        margin: 0 .5rem
      }
    }

    .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-wrapper {
      padding: 0 1rem
    }

    @media(min-width:768px) {
      .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-wrapper {
        padding: 0 1.25rem;
        width: 865px
      }
    }

    @media(min-width:701px)and (max-width:1024px) {
      .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-header {
        text-align: center
      }
    }

    .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-description {
      text-align: left
    }

    @media(min-width:768px) {
      .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-description {
        margin-top: 2.5rem;
        padding: 0
      }
    }

    @media(max-width:767px) {
      .home-growth-stack.home-products-feature-v2 .home-growth-stack__ctas {
        flex-direction: column
      }

      .home-growth-stack.home-products-feature-v2 .home-growth-stack__ctas a {
        margin: 0 0 1.25rem;
        width: 100%
      }

      .home-growth-stack.home-products-feature-v2 .home-growth-stack__ctas a:first-child {
        margin-bottom: 1.25rem
      }
    }

    .home-products-feature {
      padding: 2.75rem 0
    }

    @media(min-width:768px) {
      .home-products-feature {
        padding: 8rem 0
      }
    }

    .home-products-feature__container {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem
    }

    @media(min-width:501px)and (max-width:1024px) {
      .home-products-feature-v2 .home-products-feature__container {
        padding-top: 1.75rem
      }
    }

    .home-products-feature__card {
      backface-visibility: hidden;
      background: #fff;
      border-width: 0;
      box-shadow: 0 0 11px #eaf0f6;
      cursor: pointer;
      display: flex;
      margin-right: 0;
      padding: 1rem;
      position: relative;
      transition: box-shadow .15s ease-in-out, transform .15s ease-in-out;
      transition: .3s ease-in-out;
      width: 100%
    }

    .home-products-feature__card:hover {
      box-shadow: 0 10px 50px -5px rgba(46, 71, 93, .12);
      transform: scale(1.014)
    }

    .home-products-feature__card--heading {
      margin-bottom: 1em;
      margin-top: 1em
    }

    .home-products-feature-v2 .home-products-feature__card {
      text-align: left;
      width: calc(50% - 1rem)
    }

    @media(max-width:767px) {
      .home-products-feature-v2 .home-products-feature__card {
        padding: 2rem 1.5rem;
        width: 100%
      }
    }

    @media(min-width:501px)and (max-width:1024px) {
      .home-products-feature__card {
        padding: 2rem 2rem 2.3rem
      }
    }

    @media(min-width:768px) {
      .home-products-feature__card {
        width: 49%
      }
    }

    @media(min-width:1025px) {
      .home-products-feature__card {
        padding: 2rem 4.5rem 2.3rem
      }

      .home-products-feature-v2 .home-products-feature__card {
        padding: 2rem;
        width: calc(33% - 1rem)
      }
    }

    .home-products-feature__card:hover {
      cursor: auto
    }

    .home-products-feature__card--text-wrapper {
      display: flex;
      flex-direction: column
    }

    .home-products-feature__card--content {
      display: flex;
      flex-direction: column;
      flex-grow: 1
    }

    .home-products-feature__card--content .home-products-feature__features {
      margin-top: auto
    }

    .home-products-feature-v2 .home-products-feature__card--content .home-products-feature__features {
      border-top: 1px solid #b6c7d6
    }

    .home-products-feature__card--image {
      display: inline-block;
      height: 1.5rem;
      margin-right: .625rem;
      width: 1.5rem
    }

    .home-products-feature__card--image-wrapper {
      align-items: center;
      display: flex
    }

    @media(min-width:1025px) {
      .home-products-feature__card--image-wrapper {
        justify-content: center
      }

      .home-products-feature-v2 .home-products-feature__card--image-wrapper {
        justify-content: flex-start
      }
    }

    .home-products-feature__card--headline.registered-trademark:after,
    .home-products-feature__card--headline.trademark:after {
      font-size: 1.625rem;
      font-weight: 300
    }

    .home-products-feature__card--headline.trademark:after {
      content: "â„¢"
    }

    .home-products-feature__card--headline.registered-trademark:after {
      content: "Â®"
    }

    .home-products-feature__card.full-width-card {
      width: 100%
    }

    @media(min-width:701px) {
      .home-products-feature__card.full-width-card {
        width: 48%
      }
    }

    @media(min-width:1025px) {
      .home-products-feature__card.full-width-card {
        width: 66%
      }
    }

    .home-products-feature__card.full-width-card .home-products-feature__card--text-wrapper {
      width: 100%
    }

    @media(min-width:1025px) {
      .home-products-feature__card.full-width-card .home-products-feature__card--list {
        align-items: flex-start;
        display: flex;
        justify-content: space-between
      }
    }

    .home-products-feature__card.full-width-card .home-products-feature__card--list a {
      margin-top: 1rem;
      width: 100%
    }

    @media(min-width:1025px) {
      .home-products-feature__card.full-width-card .home-products-feature__card--list a {
        margin-top: 0;
        width: 15rem
      }

      .home-products-feature__card.full-width-card .home-products-feature__features ul li {
        float: left
      }
    }

    .home-products-feature__card.full-width-card .home-products-feature__features ul li .cl-icon {
      display: inline-block;
      height: 1.35rem;
      margin-right: .375rem;
      position: relative;
      top: 6px;
      width: 1.35rem
    }

    .home-products-feature__card.full-width-card .home-products-feature__features ul li .cl-icon [href="#check-circle"] {
      fill: var(--home-products-feature-icon-color)
    }

    @media(min-width:1025px) {
      .home-products-feature__card.full-width-card .home-products-feature__features p {
        border-top: 0;
        padding-top: 0;
        text-align: left
      }
    }

    .home-products-feature__card.full-width-card .home-products-feature__features p:after {
      content: none
    }

    @media(min-width:1025px) {
      .home-products-feature__card.full-width-card .home-products-feature__features p:after {
        border-bottom: 1px solid rgba(153, 175, 196, .2);
        content: "";
        height: .3125rem;
        margin-left: .625rem;
        position: absolute;
        top: 4px;
        width: 100%
      }
    }

    .home-products-feature__card--content-description {
      font-size: .875rem;
      text-align: left
    }

    @media(min-width:1025px) {
      .home-products-feature__card--content-description {
        text-align: center
      }
    }

    .home-products-feature-v2 .home-products-feature__card--content-description {
      padding-bottom: 1.5rem;
      text-align: left
    }

    .home-products-feature__cta {
      display: block;
      padding-top: 1.25rem;
      text-align: center;
      transition: transform .3s
    }

    @media(min-width:768px) {
      .home-products-feature__cta {
        clear: both
      }
    }

    .home-products-feature__cta a {
      font-size: .875rem;
      padding: .4rem 1.7rem;
      width: 100%
    }

    @media(min-width:1025px) {
      .home-products-feature__cta a {
        width: auto
      }

      .home-products-feature-v2 .home-products-feature__cta a {
        width: 100%
      }
    }

    .home-products-feature-v2 .home-products-feature__cta a {
      font-size: 1rem;
      padding-bottom: .45em;
      padding-left: inherit;
      padding-right: inherit;
      padding-top: .45em
    }

    .home-products-feature__features--title {
      border-top: 1px solid rgba(153, 175, 196, .2);
      font-size: .875rem;
      font-weight: 600;
      margin-bottom: .94rem;
      margin-top: 2rem;
      overflow: hidden;
      padding-top: 2rem;
      position: relative;
      text-align: left;
      text-transform: uppercase;
      z-index: 1
    }

    .home-products-feature__features ul li {
      font-size: .75rem;
      font-weight: 500;
      margin-bottom: .3125rem
    }

    .home-products-feature__features ul li:not(:last-child) {
      margin-right: 1.25rem
    }

    .home-products-feature__features ul li .cl-icon {
      display: inline-block;
      height: 1.35rem;
      margin-right: .375rem;
      position: relative;
      top: 6px;
      width: 1.35rem
    }

    .home-products-feature__features ul li .cl-icon [href="#check-circle"] {
      fill: var(--home-products-feature-icon-color)
    }

    .cl-card {
      background-color: #fff;
      border-radius: 3px;
      box-shadow: 0 1px 5px rgba(33, 51, 67, .12);
      position: relative
    }

    .cl-card:after {
      border-radius: 3px;
      box-shadow: 0 8px 16px rgba(33, 51, 67, .08);
      content: "";
      height: 100%;
      left: 0;
      opacity: 0;
      position: absolute;
      top: 0;
      transition: opacity .3s ease-in-out;
      width: 100%;
      z-index: -1
    }

    .cl-card.-white {
      background-color: #fff
    }

    .cl-card.-light {
      background-color: #f6f9fc
    }

    .cl-card.-dark {
      background-color: #2e475d
    }

    .cl-card.-border {
      border: 1px solid #b6c7d6
    }

    .cl-card.-border.-dark {
      border: none
    }

    .cl-card.-edge-left {
      position: relative
    }

    .cl-card.-edge-left:before {
      border-bottom-left-radius: inherit;
      border-top-left-radius: inherit;
      content: "";
      display: block;
      height: 100%;
      left: -1px;
      position: absolute;
      top: 0;
      width: 12px
    }

    .cl-card.-edge-left.-border:not(.-dark):before {
      height: calc(100% + 2px);
      top: -1px
    }

    .cl-card.-edge-top {
      position: relative
    }

    .cl-card.-edge-top:before {
      border-top-left-radius: inherit;
      border-top-right-radius: inherit;
      content: "";
      display: block;
      height: 13px;
      left: 0;
      position: absolute;
      top: -1px;
      width: 100%
    }

    .cl-card.-edge-top.-border:not(.-dark):before {
      left: -1px;
      width: calc(100% + 2px)
    }

    .cl-card.-edge-left.-green:before,
    .cl-card.-edge-left.-oz:before,
    .cl-card.-edge-top.-green:before,
    .cl-card.-edge-top.-oz:before {
      background: #4fb06d
    }

    .cl-card.-edge-left.-green.-dark:before,
    .cl-card.-edge-left.-oz.-dark:before,
    .cl-card.-edge-top.-green.-dark:before,
    .cl-card.-edge-top.-oz.-dark:before {
      background: #cae7d3
    }

    .cl-card.-edge-left.-lorax:before,
    .cl-card.-edge-left.-tangerine:before,
    .cl-card.-edge-top.-lorax:before,
    .cl-card.-edge-top.-tangerine:before {
      background: #ff5c35
    }

    .cl-card.-edge-left.-lorax.-dark:before,
    .cl-card.-edge-left.-tangerine.-dark:before,
    .cl-card.-edge-top.-lorax.-dark:before,
    .cl-card.-edge-top.-tangerine.-dark:before {
      background: #ffcec2
    }

    .cl-card.-edge-left.-calypso:before,
    .cl-card.-edge-left.-teal:before,
    .cl-card.-edge-top.-calypso:before,
    .cl-card.-edge-top.-teal:before {
      background: #0fbfbf
    }

    .cl-card.-edge-left.-calypso.-dark:before,
    .cl-card.-edge-left.-teal.-dark:before,
    .cl-card.-edge-top.-calypso.-dark:before,
    .cl-card.-edge-top.-teal.-dark:before {
      background: #b7ecec
    }

    .cl-card.-edge-left.-marigold:before,
    .cl-card.-edge-left.-yellow:before,
    .cl-card.-edge-top.-marigold:before,
    .cl-card.-edge-top.-yellow:before {
      background: #ffbc4b
    }

    .cl-card.-edge-left.-marigold.-dark:before,
    .cl-card.-edge-left.-yellow.-dark:before,
    .cl-card.-edge-top.-marigold.-dark:before,
    .cl-card.-edge-top.-yellow.-dark:before {
      background: #ffebc9
    }

    .cl-card.-hoverable {
      transition: opacity .3s ease-in-out
    }

    .cl-card.-hoverable:hover {
      cursor: pointer
    }

    .cl-card.-hoverable:hover:after {
      opacity: 1
    }

    .csol-full-width-cta-card-caption,
    .csol-full-width-cta-card-header {
      font-size: 1.125rem;
      font-weight: 600;
      line-height: 1.56
    }

    .csol-full-width-cta-card-description>a,
    .csol-full-width-cta-card-disclaimer>a {
      color: #0b8484;
      font-weight: 500
    }

    .csol-full-width-cta-card-description,
    .csol-full-width-cta-card-disclaimer {
      font-size: 1rem;
      font-weight: 300;
      line-height: 1.75
    }

    .cl-button {
      border: 1px solid;
      border-radius: 3px;
      cursor: pointer;
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      text-decoration: none;
      transition: background-color .15s linear, color .15s linear
    }

    .cl-button:focus-visible,
    .cl-button:hover {
      text-decoration: none
    }

    .cl-button.-disabled,
    .cl-button:disabled {
      cursor: not-allowed;
      opacity: .5
    }

    .cl-button.-primary {
      background-color: #020439;
      border-color: transparent;
      color: #fff
    }

    .cl-button.-primary:focus-visible,
    .cl-button.-primary:hover {
      background-color: #ffcec2
    }

    .cl-button.-primary:active {
      background-color: #d44325
    }

    .cl-button.-primary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-primary {
      background-color: #1d0cff
    }

    .high-contrast .cl-button.-primary:focus-visible,
    .high-contrast .cl-button.-primary:hover {
      background-color: #cee2ff;
      color: #0c009e
    }

    .cl-button.-primaryDark {
      background-color: #fff;
      border-color: transparent;
      color: #2e475d
    }

    .cl-button.-primaryDark:focus-visible,
    .cl-button.-primaryDark:hover {
      background-color: #f6f9fc
    }

    .cl-button.-primaryDark:active {
      background-color: #eaf0f6
    }

    .cl-button.-primaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-secondary {
      background-color: #fff;
      border-color: #070144;
      color: #130149
    }

    .cl-button.-secondary:focus-visible,
    .cl-button.-secondary:hover {
      background-color: #ffebe6
    }

    .cl-button.-secondary:active {
      background-color: #ffebe6
    }

    .cl-button.-secondary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-secondary {
      background-color: #edf8ff;
      border-color: #180bb1;
      color: #180bb1
    }

    .high-contrast .cl-button.-secondary:focus-visible,
    .high-contrast .cl-button.-secondary:hover {
      background-color: #caebff;
      border-color: #180bb1;
      color: #180bb1
    }

    .cl-button.-secondaryDark {
      background-color: transparent;
      border-color: #fff;
      color: #fff
    }

    .cl-button.-secondaryDark:focus-visible,
    .cl-button.-secondaryDark:hover {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:active {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-tertiary {
      background-color: #3e5974;
      border-color: #3e5974;
      color: #fff
    }

    .cl-button.-tertiary:focus-visible,
    .cl-button.-tertiary:hover {
      background-color: #516f90
    }

    .cl-button.-tertiary:active {
      background-color: #2e475d
    }

    .cl-button.-tertiary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .cl-button.-tertiaryDark {
      background-color: #eaf0f6;
      border-color: #b6c7d6;
      color: #516f90
    }

    .cl-button.-tertiaryDark:focus-visible,
    .cl-button.-tertiaryDark:hover {
      background-color: #f6f9fc;
      border-color: #b6c7d6
    }

    .cl-button.-tertiaryDark:active {
      background-color: #b6c7d6;
      border-color: #7691ad
    }

    .cl-button.-tertiaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-small {
      font-size: .875rem;
      line-height: 1.57;
      padding: .25rem 1rem
    }

    .cl-button.-medium,
    .cl-button.-regular {
      font-size: 1rem;
      line-height: 1.75;
      padding: .5rem 2rem
    }

    .cl-button.-large {
      font-size: 1.125rem;
      line-height: 1.78;
      padding: 1rem 2.5rem
    }

    .csol-full-width-cta-card {
      padding: 0 16px
    }

    @media(min-width:1080px) {
      .csol-full-width-cta-card {
        padding: 0
      }
    }

    .csol-full-width-cta-card-caption {
      color: #fff;
      margin: 0;
      text-align: center
    }

    .csol-full-width-cta-card-container {
      display: flex;
      flex-direction: column
    }

    @media(min-width:600px) {
      .csol-full-width-cta-card-container {
        flex-direction: row;
        justify-content: flex-end
      }

      .csol-full-width-cta-card-container.-right {
        flex-direction: row-reverse
      }
    }

    .csol-full-width-cta-card-cta {
      margin-top: 40px
    }

    .csol-full-width-cta-card-content {
      color: #2e475d;
      flex-grow: 1;
      padding: 40px
    }

    .csol-full-width-cta-card-header {
      margin: 0 0 16px
    }

    .csol-full-width-cta-card-description {
      margin: 16px 0
    }

    .csol-full-width-cta-card-disclaimer {
      display: block;
      margin-top: 16px
    }

    .csol-full-width-cta-card-image {
      background-image: linear-gradient(90deg, #ff5c35 0, #ff8933);
      box-sizing: content-box;
      flex-grow: 0;
      min-height: 100%;
      overflow: hidden;
      position: relative
    }

    .high-contrast .csol-full-width-cta-card-image {
      background: #2e475d
    }

    @media(min-width:600px) {
      .csol-full-width-cta-card-image {
        min-width: 184px;
        width: 184px
      }
    }

    @media(min-width:900px) {
      .csol-full-width-cta-card-image {
        min-width: 339px;
        width: 339px
      }
    }

    .csol-full-width-cta-card-background {
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      z-index: 1
    }

    .csol-full-width-cta-card-background-image {
      height: 100%;
      object-fit: cover;
      width: 100%
    }

    .csol-full-width-cta-card-overlay {
      background-color: #2e475d;
      inset: 0;
      object-fit: cover;
      opacity: .8;
      position: absolute;
      z-index: 2
    }

    .csol-full-width-cta-card-hubspot-logo+.csol-full-width-cta-card-caption {
      margin-top: 16px
    }

    .csol-full-width-cta-card-graphic-container {
      align-items: center;
      display: flex;
      flex-direction: column;
      height: 100%;
      justify-content: center;
      overflow: hidden;
      padding: 40px;
      position: relative;
      width: 100%;
      z-index: 3
    }

    .csol-full-width-cta-card-graphic-container:empty {
      min-height: 336px
    }

    @media(min-width:600px) {
      .csol-full-width-cta-card-graphic-container:empty {
        min-height: auto
      }
    }

    .csol-full-width-cta-card-graphic-container.-mobile-hide {
      display: none
    }

    @media(min-width:600px) {
      .csol-full-width-cta-card-graphic-container.-mobile-hide {
        display: block
      }
    }

    .csol-section {
      padding-bottom: 32px;
      padding-top: 32px
    }

    @media(min-width:600px) {
      .csol-section {
        padding-bottom: 48px;
        padding-top: 48px
      }
    }

    .csol-section.-padding-top-xs {
      padding-top: 16px
    }

    @media(min-width:600px) {
      .csol-section.-padding-top-xs {
        padding-top: 24px
      }
    }

    .csol-section.-padding-top-none {
      padding-top: 0
    }

    .csol-section.-padding-top-s {
      padding-top: 24px
    }

    @media(min-width:600px) {
      .csol-section.-padding-top-s {
        padding-top: 40px
      }
    }

    .csol-section.-padding-top-md {
      padding-top: 40px
    }

    @media(min-width:600px) {
      .csol-section.-padding-top-md {
        padding-top: 64px
      }
    }

    .csol-section.-padding-top-lg {
      padding-top: 64px
    }

    @media(min-width:600px) {
      .csol-section.-padding-top-lg {
        padding-top: 96px
      }
    }

    .csol-section.-padding-bottom-xs {
      padding-bottom: 16px
    }

    @media(min-width:600px) {
      .csol-section.-padding-bottom-xs {
        padding-bottom: 24px
      }
    }

    .csol-section.-padding-bottom-none {
      padding-bottom: 0
    }

    .csol-section.-padding-bottom-s {
      padding-bottom: 24px
    }

    @media(min-width:600px) {
      .csol-section.-padding-bottom-s {
        padding-bottom: 40px
      }
    }

    .csol-section.-padding-bottom-md {
      padding-bottom: 40px
    }

    @media(min-width:600px) {
      .csol-section.-padding-bottom-md {
        padding-bottom: 64px
      }
    }

    .csol-section.-padding-bottom-lg {
      padding-bottom: 64px
    }

    @media(min-width:600px) {
      .csol-section.-padding-bottom-lg {
        padding-bottom: 96px
      }
    }

    .csol-section.-white {
      background-color: #fff;
      color: #2e475d
    }

    .csol-section.-light {
      background-color: #f6f9fc;
      color: #2e475d
    }

    .csol-section.-dark {
      background-color: #3e5974;
      color: #fff
    }

    .csol-section-wrapper {
      margin: 0 auto;
      max-width: 1080px;
      width: 100%
    }

    .cl-button {
      border: 1px solid;
      border-radius: 3px;
      cursor: pointer;
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      text-decoration: none;
      transition: background-color .15s linear, color .15s linear
    }

    .cl-button:focus-visible,
    .cl-button:hover {
      text-decoration: none
    }

    .cl-button.-disabled,
    .cl-button:disabled {
      cursor: not-allowed;
      opacity: .5
    }

    .cl-button.-primary {
      background-color: #040238;
      border-color: transparent;
      color: #fff
    }

    .cl-button.-primary:focus-visible,
    .cl-button.-primary:hover {
      background-color: #ffcec2
    }

    .cl-button.-primary:active {
      background-color: #020127
    }

    .cl-button.-primary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-primary {
      background-color: #1d0cff
    }

    .high-contrast .cl-button.-primary:focus-visible,
    .high-contrast .cl-button.-primary:hover {
      background-color: #cee2ff;
      color: #0c009e
    }

    .cl-button.-primaryDark {
      background-color: #fff;
      border-color: transparent;
      color: #2e475d
    }

    .cl-button.-primaryDark:focus-visible,
    .cl-button.-primaryDark:hover {
      background-color: #f6f9fc
    }

    .cl-button.-primaryDark:active {
      background-color: #eaf0f6
    }

    .cl-button.-primaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-secondary {
      background-color: #fff;
      border-color: #ff5c35;
      color: #ff5c35
    }

    .cl-button.-secondary:focus-visible,
    .cl-button.-secondary:hover {
      background-color: #ffebe6
    }

    .cl-button.-secondary:active {
      background-color: #ffebe6
    }

    .cl-button.-secondary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .high-contrast .cl-button.-secondary {
      background-color: #edf8ff;
      border-color: #180bb1;
      color: #180bb1
    }

    .high-contrast .cl-button.-secondary:focus-visible,
    .high-contrast .cl-button.-secondary:hover {
      background-color: #caebff;
      border-color: #180bb1;
      color: #04012a
    }

    .cl-button.-secondaryDark {
      background-color: transparent;
      border-color: #fff;
      color: #fff
    }

    .cl-button.-secondaryDark:focus-visible,
    .cl-button.-secondaryDark:hover {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:active {
      background-color: #fff;
      color: #2e475d
    }

    .cl-button.-secondaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-tertiary {
      background-color: #3e5974;
      border-color: #3e5974;
      color: #fff
    }

    .cl-button.-tertiary:focus-visible,
    .cl-button.-tertiary:hover {
      background-color: #516f90
    }

    .cl-button.-tertiary:active {
      background-color: #2e475d
    }

    .cl-button.-tertiary:focus-visible {
      outline: 2px solid #0b8484;
      outline-offset: 2px
    }

    .cl-button.-tertiaryDark {
      background-color: #eaf0f6;
      border-color: #b6c7d6;
      color: #516f90
    }

    .cl-button.-tertiaryDark:focus-visible,
    .cl-button.-tertiaryDark:hover {
      background-color: #f6f9fc;
      border-color: #b6c7d6
    }

    .cl-button.-tertiaryDark:active {
      background-color: #b6c7d6;
      border-color: #7691ad
    }

    .cl-button.-tertiaryDark:focus-visible {
      outline: 2px solid #b7ecec;
      outline-offset: 2px
    }

    .cl-button.-small {
      font-size: .875rem;
      line-height: 1.57;
      padding: .25rem 1rem
    }

    .cl-button.-medium,
    .cl-button.-regular {
      font-size: 1rem;
      line-height: 1.75;
      padding: .5rem 2rem
    }

    .cl-button.-large {
      font-size: 1.125rem;
      line-height: 1.78;
      padding: 1rem 2.5rem
    }
  </style>







  {{--
        <link rel="icon" type="image/png" href="https://scontent.fenu1-1.fna.fbcdn.net/v/t39.30808-6/347413096_962841275058592_1657124879188809863_n.jpg?stp=dst-jpg_p180x540&_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=jPKwGELiA9QAX_Z8kGA&_nc_zt=23&_nc_ht=scontent.fenu1-1.fna&oh=00_AfDAOPWyWwJpCcf9YbXD6AeswGAqjbwzoQXwUwOlrKJWhg&oe=64722A15"> --}}

  <link rel="icon" type="image/x-icon" href="/images/DAST_LOGO.ico">













  <style>
    .animate-text {
      opacity: 0;
      animation: fadeIn 1s forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>












  <meta name="theme-color" content="#FF7A59">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="description" content="DAST is a technology company that provides software development solutions, blockchain solutions and digital services to individuals, businesses, and organisations. 
      ">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- --}}

  <!-- htmlmin:ignore -->



  <meta property="og:description" content="At DAST Technology, we are committed to providing world-class web3 and AI technology solutions to our clients through innovation, research, and development.">
  <meta property="og:title" content="DAST |  We aim to foster a culture of transparency, trust, and collaboration in the web3 ecosystem, while promoting social impact and economic growth.">
  <meta name="twitter:description" content="DAST|Discover the limitless possibilities of web3 and AI with DASTGPT Bot">
  <link rel="icon" href="https://scontent.fenu1-1.fna.fbcdn.net/v/t39.30808-6/280272480_110451504997152_9173976264510201143_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=hWSMRDa1e8gAX9rPxoA&_nc_zt=23&_nc_ht=scontent.fenu1-1.fna&oh=00_AfAS3OyTVLVFPX8UKWGUfDFuvWPQwWwcdozShyBdQsigTg&oe=64744BA6" type="image/x-icon">






  <style>
    a.cta_button {
      -moz-box-sizing: content-box !important;
      -webkit-box-sizing: content-box !important;
      box-sizing: content-box !important;
      vertical-align: middle
    }

    .hs-breadcrumb-menu {
      list-style-type: none;
      margin: 0px 0px 0px 0px;
      padding: 0px 0px 0px 0px
    }

    .hs-breadcrumb-menu-item {
      float: left;
      padding: 10px 0px 10px 10px
    }

    .hs-breadcrumb-menu-divider:before {
      content: '›';
      padding-left: 10px
    }

    .hs-featured-image-link {
      border: 0
    }

    .hs-featured-image {
      float: right;
      margin: 0 0 20px 20px;
      max-width: 50%
    }

    @media (max-width: 568px) {
      .hs-featured-image {
        float: none;
        margin: 0;
        width: 100%;
        max-width: 100%
      }
    }

    .hs-screen-reader-text {
      clip: rect(1px, 1px, 1px, 1px);
      height: 1px;
      overflow: hidden;
      position: absolute !important;
      width: 1px
    }
  </style>

  <link rel="stylesheet" href="https://www.hubspot.com/wt-assets/static-files/2.2.1/core-nav/styles.css">
  <link rel="stylesheet" href="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/66945685888/1683744498295/module_66945685888_WTM_-_Homepage_-_Branding_Rollout_Hero.min.css">
  <link rel="stylesheet" href="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/32625700689/1683744499575/module_32625700689_WTM_-_Homepage_-_Products.min.css">
  <link rel="stylesheet" href="//cdn2.hubspot.net/hub/53/hub_generated/template_assets/80992946218/1678704635883/_Web_Team_Assets/Component_Modules/components/core/css/card.min.css">
  <link rel="stylesheet" href="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/80992206961/1683711996785/module_80992206961_fullWidthCTACard.min.css">
  <link rel="stylesheet" href="//cdn2.hubspot.net/hub/53/hub_generated/template_assets/80992946022/1681925160787/_Web_Team_Assets/Component_Modules/assets/section.min.css">
  <link rel="stylesheet" href="//cdn2.hubspot.net/hub/53/hub_generated/template_assets/80992946217/1678704629473/_Web_Team_Assets/Component_Modules/components/core/css/button.min.css">

  <style type="text/css">
    .hsg-notice {}

    .hsg-notice p strong {
      font-weight: 600;
    }

    .hsg-notice p em {
      font-style: italic;
    }
  </style>

  <link rel="stylesheet" href="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/32625894188/1683744938713/module_32625894188_WTM_-_Homepage_-_Community.min.css">
  <link rel="stylesheet" href="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/32625908550/1683744938755/module_32625908550_WTM_-_Homepage_-_Customers.min.css">
  <link rel="stylesheet" href="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/80992206946/1680686005259/module_80992206946_ctaContentBlock.min.css">





  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Begin Domain Settings Code -->
  <!-- Meta -->
  <meta property="twitter:account_id" content="14458280">
  <meta name="msvalidate.01" content="C5553ABFC995043D86E2C15CA3DADD34">
  <meta name="p:domain_verify" content="7f4fa0f1fccc171fd4d5af64f062521c">
  <meta http-equiv="content-language" content="en-US">
  <meta property="fb:pages" content="6039999393">



  <meta name="twitter:card" content="summary_large_image">
  <meta http-equiv="content-language" content="en">





  <!-- ss_approved -->

  <!-- htmlmin:ignore -->





  <script src="//cdn-3.convertexperiments.com/js/10031559-1003891.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>









  <!--CRITICAL_CSS: ON-->
  <!--critical_css!--><!--ref:v2.1.6-->
  <style type="text/css">
    @font-face {
      font-family: hsg-icons;
      src: url("https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.eot");
      src: url("https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.eot?#iefix") format("eot"), url("https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.woff2") format("woff2"), url("https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.woff") format("woff"), url("https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.ttf") format("truetype"), url("https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.svg#hsg-icons") format("svg")
    }

    @font-face {
      font-display: swap;
      font-family: "Lexend Deca";
      font-weight: 300;
      src: url("//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-Light.woff2") format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: "Lexend Deca";
      font-weight: 400;
      src: url("//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-Light.woff2") format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: "Lexend Deca";
      font-weight: 500;
      src: url("//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-Medium.woff2") format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: "Lexend Deca";
      font-weight: 600;
      src: url("//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-SemiBold.woff2") format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: "Queens Medium";
      font-weight: 500;
      src: url("//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/Queens-Medium.woff2") format("woff2")
    }

    @font-face {
      font-family: hsg-icons;
      src: url(https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.eot);
      src: url(https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.eot?#iefix) format("eot"), url(https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.woff2) format("woff2"), url(https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.woff) format("woff"), url(https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.ttf) format("truetype"), url(https://static2cdn.hubspot.com/hubspot.com/static-1.4200/_hsg-ss/build/icons/hsg-icons.svg#hsg-icons) format("svg")
    }

    @font-face {
      font-display: swap;
      font-family: Lexend Deca;
      font-weight: 300;
      src: url(//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-Light.woff2) format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: Lexend Deca;
      font-weight: 400;
      src: url(//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-Light.woff2) format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: Lexend Deca;
      font-weight: 500;
      src: url(//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-Medium.woff2) format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: Lexend Deca;
      font-weight: 600;
      src: url(//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/LexendDeca-SemiBold.woff2) format("woff2")
    }

    @font-face {
      font-display: swap;
      font-family: Queens Medium;
      font-weight: 500;
      src: url(//53.fs1.hubspotusercontent-na1.net/hubfs/53/tools/fonts/Queens-Medium.woff2) format("woff2")
    }

    .a11y-contrast-toggle {
      --a11y-contrast-toggle-px-width: 40;
      --a11y-contrast-toggle-px-height: 24;
      --a11y-contrast-toggle-px-border-width: 2;
      --a11y-contrast-toggle-px-visible-padding: var(--a11y-contrast-toggle-px-border-width);
      --a11y-contrast-toggle-px-padding: calc(var(--a11y-contrast-toggle-px-border-width) + var(--a11y-contrast-toggle-px-visible-padding));
      --a11y-contrast-toggle-px-inner-width: calc(var(--a11y-contrast-toggle-px-width) - 2 * var(--a11y-contrast-toggle-px-padding));
      --a11y-contrast-toggle-px-circle-diameter: calc(var(--a11y-contrast-toggle-px-height) - 2 * var(--a11y-contrast-toggle-px-padding));
      --a11y-contrast-toggle-px-cover-diameter: calc(var(--a11y-contrast-toggle-px-width) * 2 - var(--a11y-contrast-toggle-px-height));
      --a11y-contrast-toggle-border-width: calc(var(--a11y-contrast-toggle-px-border-width) * 1px);
      --a11y-contrast-toggle-padding: calc(var(--a11y-contrast-toggle-px-padding) * 1px);
      --a11y-contrast-toggle-outline-width: calc((var(--a11y-contrast-toggle-px-visible-padding) / 2) * 1px);
      --a11y-contrast-toggle-circle-diameter: calc(var(--a11y-contrast-toggle-px-circle-diameter) * 1px);
      --a11y-contrast-toggle-translate-distance: calc((var(--a11y-contrast-toggle-px-inner-width) - var(--a11y-contrast-toggle-px-circle-diameter)) * 1px);
      --a11y-contrast-toggle-cover-scale: calc(var(--a11y-contrast-toggle-px-cover-diameter) / var(--a11y-contrast-toggle-px-circle-diameter));
      --a11y-contrast-toggle-text-color: #2e475d;
      --a11y-contrast-toggle-text-gap: 12px;
      --a11y-contrast-toggle-enabled-color: #fff;
      --a11y-contrast-toggle-border-color: #2e475d;
      --a11y-contrast-toggle-icon-color: #213343;
      --a11y-contrast-toggle-background-color: #010121;
      display: inline-flex;
      align-items: center;
      padding: 0;
      border: 0;
      border-radius: 3px;
      gap: var(--a11y-contrast-toggle-text-gap);
      background: 0 0;
      color: var(--a11y-contrast-toggle-text-color);
      font-size: inherit
    }

    .a11y-contrast-toggle.-small {
      --a11y-contrast-toggle-px-width: 32;
      --a11y-contrast-toggle-px-height: 16;
      --a11y-contrast-toggle-px-border-width: 1;
      --a11y-contrast-toggle-text-gap: 12px
    }

    .a11y-contrast-toggle__switch::before {
      content: "";
      grid-area: switch;
      display: block;
      width: var(--a11y-contrast-toggle-circle-diameter);
      height: var(--a11y-contrast-toggle-circle-diameter);
      border-radius: 50%;
      background: var(--a11y-contrast-toggle-enabled-color);
      -webkit-transform: scale(var(--a11y-contrast-toggle-cover-scale));
      transform: scale(var(--a11y-contrast-toggle-cover-scale))
    }

    .a11y-contrast-toggle__contrast-icon {
      grid-area: switch;
      position: relative;
      display: block;
      width: var(--a11y-contrast-toggle-circle-diameter);
      height: var(--a11y-contrast-toggle-circle-diameter);
      border-radius: 50%;
      background: 0 0;
      color: var(--a11y-contrast-toggle-icon-color);
      overflow: hidden
    }

    .hsg-page-width-normal {
      max-width: 1080px;
      margin: 0 auto;
      padding: 0 1rem;
      box-sizing: content-box
    }

    .hsg-nav__group-item--search input,
    .hsg-nav__group-item--search-container input {
      font-size: 1rem;
      -webkit-appearance: none;
      appearance: none;
      background-color: #f6f9fc;
      color: #2e475d;
      line-height: 1.375;
      border: 1px solid;
      border-color: #b6c7d6;
      border-radius: .1875rem;
      width: 100%;
      min-height: 2.5rem;
      padding: .5625rem .625rem
    }

    .hsg-nav__group-item--search input::-webkit-input-placeholder,
    .hsg-nav__group-item--search-container input::-webkit-input-placeholder {
      color: #516f90
    }

    .hsg-nav__group-item--search input::-moz-placeholder,
    .hsg-nav__group-item--search-container input::-moz-placeholder {
      color: #516f90
    }

    .hsg-nav__group-item--search input:-ms-input-placeholder,
    .hsg-nav__group-item--search-container input:-ms-input-placeholder {
      color: #516f90
    }

    a,
    body,
    div,
    h1,
    h2,
    h3,
    h4,
    header,
    html,
    img,
    li,
    nav,
    p,
    section,
    span,
    ul {
      margin: 0;
      padding: 0;
      border: 0;
      font-size: 100%;
      font: inherit;
      vertical-align: baseline
    }

    button {
      -webkit-appearance: none;
      appearance: none;
      font: inherit;
      margin: 0
    }

    .visually-hidden:not(:focus):not(:active) {
      border: 0;
      clip: rect(0, 0, 0, 0);
      height: 1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      white-space: nowrap;
      width: 1px
    }

    .cta--primary,
    .cta--secondary {
      text-align: center;
      border-radius: .1875rem;
      display: inline-block;
      text-decoration: none;
      border: 0;
      font-weight: 500;
      line-height: 1.57
    }

    .cta--primary {
      background-color: #08012b;
      color: #fff;
      border: 1px solid #ff5c35
    }

    .cta--primary,
    .cta--secondary {
      padding: .9em 1.388em;
      font-size: .9375rem;
      min-width: 8.555rem
    }

    body {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      color: #2e475d;
      font-family: "Lexend Deca", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 1rem;
      font-weight: 300;
      line-height: 1.75;
      margin: 0;
      padding: 0
    }

    h1.-secondary {
      font-family: "Queens Medium", serif;
      font-size: 2.25rem;
      font-weight: 500;
      line-height: 1.28
    }

    h3 {
      font-size: 1.5rem;
      font-weight: 500;
      line-height: 1.42
    }

    .h4,
    h4 {
      font-size: 1.375rem;
      font-weight: 500;
      line-height: 1.45
    }

    p {
      font-size: 1rem;
      font-weight: 300;
      line-height: 1.75;
      margin-top: 1em;
      margin-bottom: 1em
    }

    #hsg-nav__logo {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: none
    }

    #hsg-nav__logo-fixed {
      display: none;
      width: 30px;
      height: 30px
    }

    #hsg-nav__logo-desktop {
      display: block;
      width: 100px;
      height: 30px;
      fill: #ff5c35
    }

    #hsg-nav__logo-mobile {
      display: block;
      height: 2rem;
      width: 2rem
    }

    #hsg-nav__logo-caret {
      display: none;
      align-items: center;
      padding: 0;
      border: 0;
      margin-right: 0;
      background: 0 0
    }

    #hsg-nav__logo-caret-img {
      display: block;
      height: 2rem;
      width: 1rem;
      -webkit-transform: rotate(180deg);
      transform: rotate(180deg)
    }

    .hsg-nav-menu__skip-link {
      padding: 6px;
      position: absolute;
      top: auto;
      left: -1000px;
      color: #fff !important;
      background: #3e5974;
      z-index: 100;
      overflow: hidden
    }

    .hsg-nav__wrapper {
      position: relative;
      z-index: 95
    }

    .hsg-nav__wrapper .hsg-nav__link:not([class^=cta]),
    .hsg-nav__wrapper a:not([class^=cta]) {
      color: inherit;
      text-decoration: none
    }

    .hsg-nav__wrapper button.hsg-nav__link {
      width: 100%
    }

    .hsg-nav__inner {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between
    }

    @media (max-width:899px) {
      #hsg-nav__logo-desktop {
        display: none
      }

      #hsg-nav__logo-caret-home {
        display: block;
        font-size: .6rem;
        line-height: 1.5;
        text-transform: uppercase;
        color: #99afc4
      }

      .hsg-nav__wrapper nav>.hsg-page-width-normal {
        padding: 0
      }

      .hsg-nav__inner {
        width: 100%;
        background: #fff;
        box-shadow: 0 1px 5px 0 rgba(33, 51, 67, .12);
        padding: .5rem 1rem;
        flex-wrap: nowrap
      }

      .hsg-nav-menu .hsg-nav__inner {
        position: fixed;
        top: 0
      }
    }

    .hsg-nav__group-item {
      display: block
    }

    @media (min-width:900px) {
      #hsg-nav__logo-mobile {
        display: none
      }

      .hsg-nav__group-item {
        display: inline-block
      }
    }

    .hsg-nav-menu .hsg-nav__group-item--has-dropdown .hsg-nav__link-wrapper::after {
      content: "";
      opacity: 0
    }

    .hsg-nav__group-item--has-dropdown .hsg-nav__link-wrapper button {
      background: 0 0;
      border: 0;
      border-spacing: 0;
      margin: 0
    }

    .hsg-nav-bar .hsg-nav__group-item {
      position: relative
    }

    .hsg-nav-bar .hsg-nav__group-item:first-child:not(:only-child) .hsg-nav__link-label {
      padding-left: 0
    }

    .hsg-nav__link-wrapper {
      position: relative
    }

    .hsg-nav__link {
      display: block;
      padding: 1rem 0
    }

    @media (min-width:900px) {
      .hsg-nav__link {
        display: inline-block;
        padding: .75rem 0
      }

      .hsg-nav__group-item--has-dropdown .hsg-nav__link-label::after {
        content: "\E003";
        display: inline-block;
        position: relative;
        font-family: hsg-icons;
        font-size: 8px;
        line-height: 1;
        margin: 0 .25rem 0 .625rem;
        font-weight: 700
      }
    }

    .hsg-nav-bar .hsg-nav__link {
      font-weight: 500
    }

    .hsg-nav__link-label {
      padding: 0 1rem
    }

    @media (max-width:899px) {
      .hsg-nav__link-label {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        font-weight: 500
      }

      .hsg-nav__group--primary .hsg-nav__link-label::after {
        content: "\E003";
        display: inline-block;
        position: relative;
        font-family: hsg-icons;
        line-height: 1;
        margin: 0 .25rem .25rem .625rem;
        font-weight: 700;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        font-size: 1.25rem;
        vertical-align: middle;
        color: #516f90
      }
    }

    .hsg-nav__dropdown-list {
      margin: 0 auto
    }

    .hsg-nav__dropdown-list-title {
      display: none
    }

    @media (max-width:899px) {
      .hsg-nav__dropdown-list-title {
        font-size: 1.25rem;
        display: block;
        text-align: center;
        padding: 1rem 0;
        background-color: #f6f9fc;
        border-bottom: 1px solid #b6c7d6;
        margin: 0
      }

      .hsg-nav-menu {
        height: 3rem
      }
    }

    .hsg-nav-bar .hsg-nav__dropdown-list {
      padding: .75rem 0
    }

    .hsg-nav__dropdown-item a {
      display: block;
      white-space: nowrap;
      padding: .25rem 1.25rem
    }

    .hsg-nav-top-bar .hsg-nav__group-item--has-dropdown .hsg-nav__dropdown-list {
      display: flex;
      flex-direction: column
    }

    #hsg-nav-global .hsg-nav-bar {
      display: none
    }

    .hsg-nav-menu {
      position: relative;
      background-color: #fff;
      color: #2e475d;
      z-index: 90;
      box-shadow: 0 2px 4px rgba(33, 51, 67, .12)
    }

    .hsg-nav__burger-wrapper {
      flex: none;
      width: 2.5rem;
      height: 2.5rem;
      margin: 0;
      -webkit-transform: translateY(0);
      transform: translateY(0)
    }

    @media (min-width:900px) {
      .hsg-nav__dropdown-list {
        opacity: 0;
        visibility: hidden
      }

      .hsg-nav-bar .hsg-nav__dropdown-list {
        left: 0;
        min-width: 100%
      }

      #hsg-nav-global .hsg-nav-bar {
        display: block
      }

      .hsg-nav__burger-wrapper {
        display: none
      }
    }

    .hsg-nav__burger {
      -webkit-transform: rotate(0);
      transform: rotate(0);
      display: block;
      width: 100%;
      height: 100%;
      border: 0;
      background-color: transparent;
      top: 0;
      left: 0;
      position: relative;
      padding: 0
    }

    .hsg-nav__burger-label,
    .hsg-nav__burger-label::after,
    .hsg-nav__burger-label::before {
      display: block;
      background-color: #2e475d;
      border-radius: 1rem;
      width: 100%;
      height: .2rem;
      position: relative;
      left: 0
    }

    .hsg-nav__burger-label::after,
    .hsg-nav__burger-label::before {
      content: "";
      position: absolute;
      top: 0;
      width: 80%;
      left: 10%
    }

    .hsg-nav__burger-label::before {
      -webkit-transform: translateY(-.5rem);
      transform: translateY(-.5rem)
    }

    .hsg-nav__burger-label::after {
      -webkit-transform: translateY(.5rem);
      transform: translateY(.5rem)
    }

    .hsg-nav__groups-wrapper {
      overflow: auto;
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #fff;
      border-radius: 0 .1875rem .1875rem 0;
      height: calc(100vh - 100%);
      width: 100%;
      font-size: 1rem
    }

    .hsg-nav__group--primary {
      padding-top: 1rem
    }

    @media (min-width:900px) {
      .hsg-nav__groups-wrapper {
        overflow: visible;
        flex-shrink: 0;
        align-self: flex-start;
        display: flex;
        position: static;
        background-color: transparent;
        border-radius: 0;
        max-height: none;
        height: auto;
        margin-left: 3rem;
        margin-right: 0;
        max-width: calc(100% - (110px + 3rem));
        font-size: inherit;
        justify-content: space-between
      }

      .hsg-nav__group--primary {
        padding: 0
      }

      .hsg-nav__group--utility {
        display: none
      }

      .hsg-nav__group--primary {
        overflow-y: visible;
        background-image: none;
        display: flex;
        justify-content: flex-start
      }

      .hsg-nav__group--cta {
        align-self: center
      }
    }

    .hsg-nav-menu .hsg-nav__group--utility .hsg-nav__group-item,
    .hsg-nav-menu .hsg-nav__group--utility .hsg-nav__link {
      font-size: .875rem;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: .25rem 0
    }

    .hsg-nav__group--utility .hsg-nav__group-item--has-dropdown .hsg-nav__link-label::after {
      content: "\E003";
      display: inline-block;
      position: relative;
      font-family: hsg-icons;
      font-size: 8px;
      line-height: 1;
      margin: 0 .25rem 0 .625rem;
      font-weight: 700
    }

    .hsg-nav__group--lang {
      grid-row: 1/-1;
      grid-column: 1/2;
      flex-basis: 45%
    }

    .hsg-nav__group--lang::after {
      content: "";
      background-color: #b6c7d6;
      width: 2px;
      height: 4rem;
      position: relative;
      left: 2rem
    }

    @media (min-width:501px) and (max-width:899px) {
      .hsg-nav__group--lang::after {
        left: 0;
        height: 2rem
      }
    }

    .hsg-nav__group--lang .hsg-nav__link-label {
      align-items: center
    }

    .hsg-nav__group--cta .cta--features {
      font-size: .875rem;
      font-weight: 600;
      padding: .45em 1.388em
    }

    .hsg-nav__group--cta .cta--features:first-child {
      margin-right: .5rem
    }

    .hsg-nav__group--cta .header-nav__ctas {
      display: flex;
      align-items: center;
      gap: 1rem
    }

    .hsg-nav__group--cta .header-nav__ctas a.cta--features {
      margin: 0
    }

    @media (max-width:899px) {
      .hsg-nav__group--utility {
        margin: 1rem;
        display: grid;
        grid-template: 1fr 1fr/1fr 1fr
      }

      .hsg-nav__group--utility.hsg-nav__group--has-contrast-toggle {
        grid-template-rows: 1fr 1fr 1fr;
        -webkit-column-gap: 2rem;
        column-gap: 2rem
      }

      .hsg-nav__group--utility.hsg-nav__group--has-contrast-toggle .hsg-nav__group--lang:after {
        top: -1.25rem;
        left: 0;
        height: 4rem
      }

      .hsg-nav__group--utility.hsg-nav__group--has-contrast-toggle .hsg-nav__group--lang>.hsg-nav__group {
        width: 100%
      }

      .hsg-nav__group--utility .hsg-nav__group-item .a11y-contrast-toggle,
      .hsg-nav__group--utility .hsg-nav__group-item a {
        font-weight: 500
      }

      .hsg-nav__group--cta .cta--features {
        padding: .9em 1.388em
      }

      .hsg-nav__group--cta .cta--features:first-child {
        margin-bottom: 1rem;
        margin-right: 0
      }

      .hsg-nav__group--cta .header-nav__ctas {
        flex-wrap: wrap
      }

      .hsg-nav__group--cta .header-nav__ctas a.cta--features {
        width: 100%
      }

      .hsg-nav__group-item.hsg-nav__group-item--cta a.homepage-nav,
      .hsg-nav__group-item.hsg-nav__group-item--cta a.homepage-nav2 {
        font-size: 1.125rem;
        padding: 1.25rem .5rem;
        font-weight: 600
      }
    }

    .hsg-nav__group-item a {
      font-weight: 400
    }

    .hsg-nav__group-item a.cta--primary {
      color: #fff
    }

    body:not(.high-contrast) .hsg-nav__group-item a.cta--secondary {
      color: #ff5c35
    }

    .hsg-nav__group-item--search,
    .hsg-nav__group-item--search-container {
      background-color: #f6f9fc
    }

    .hsg-nav__group-item--search input,
    .hsg-nav__group-item--search-container input {
      background-color: #fff;
      background-image: url("//53.fs1.hubspotusercontent-na1.net/hubfs/53/assets/hubspot.com/_style-guide/sword-sprocket/Search%20Icon.svg");
      background-position: right .5rem center;
      background-repeat: no-repeat;
      background-size: 1rem;
      font-size: .75rem;
      font-weight: 500;
      text-transform: lowercase;
      -webkit-appearance: none;
      text-align: center
    }

    @media (min-width:900px) {
      .hsg-nav__group-item {
        font-weight: 500
      }

      .hsg-nav__group-item a {
        font-weight: 500
      }

      .hsg-nav__group-item--about .hsg-nav__dropdown-list {
        font-size: .875rem;
        right: 0;
        left: auto;
        display: flex;
        flex-direction: column
      }

      .hsg-nav__group-item--about-mobile {
        display: none
      }

      .hsg-nav__group-item--search,
      .hsg-nav__group-item--search-container {
        background-color: transparent
      }

      .hsg-nav__group-item--search input,
      .hsg-nav__group-item--search-container input {
        background-color: transparent;
        background-position: .25rem center;
        text-align: left;
        border: 0;
        max-height: 2rem;
        min-height: 1rem;
        max-width: 0;
        padding: .25rem .5rem .25rem 1.75rem
      }
    }

    .hsg-nav__group-item--search-container {
      background-color: transparent;
      max-width: 540px;
      margin: 0 1rem;
      width: 100%;
      display: none
    }

    .hsg-nav__group-item--search-container input {
      background-color: #f6f9fc;
      border-radius: 5rem;
      text-transform: none
    }

    .hsg-nav__group-item.hsg-nav__group-item--cta {
      padding: 0 1rem;
      border-bottom: 0
    }

    @media (min-width:900px) {
      .hsg-nav__group-item.hsg-nav__group-item--cta {
        padding: 0 .5rem
      }

      .hsg-nav__group-item.hsg-nav__group-item--login {
        display: inline-block
      }
    }

    @media (max-width:500px) {
      .hsg-nav__group-item.hsg-nav__group-item--login {
        padding-top: .5rem
      }
    }

    .hsg-nav__group-item.hsg-nav__group-item--cta a,
    .hsg-nav__group-item.hsg-nav__group-item--login a {
      display: block;
      text-align: center
    }

    .hsg-nav__group-item.hsg-nav__group-item--login a[data-logged-in-text]:not([data-logged-in-text=done]) {
      opacity: 0;
      visibility: hidden
    }

    .hsg-nav-menu .hsg-nav__link {
      font-size: 1.125rem
    }

    @media (min-width:900px) {

      .hsg-nav__group-item.hsg-nav__group-item--cta a,
      .hsg-nav__group-item.hsg-nav__group-item--login a {
        display: inline-block
      }

      .hsg-nav-menu .hsg-nav__link {
        padding: 1rem 0 0 2rem
      }

      .hsg-nav-menu .hsg-nav__link:first-child {
        padding: 1rem 0 0 .5rem
      }
    }

    .hsg-nav-menu .hsg-nav__link-label {
      padding: 0
    }

    @media (min-width:900px) {
      .hsg-nav-menu .hsg-nav__link-label {
        padding: .75rem 1rem 1.5rem;
        display: inline-block;
        line-height: 1.5
      }

      .hsg-nav__dropdown-list {
        width: 100%;
        left: 0
      }

      .hsg-nav__dropdown-list .hsg-nav__subheader-highlight {
        color: #0b8484;
        font-weight: 600
      }
    }

    @media (max-width:899px) {
      .hsg-nav__dropdown-list {
        overflow: scroll;
        position: absolute;
        top: 0;
        left: 200%;
        bottom: 0;
        width: 0;
        padding-bottom: 10rem;
        visibility: hidden
      }
    }

    @media (min-width:900px) {
      .hsg-nav__dropdown-row {
        display: flex;
        justify-content: space-between;
        padding: 1rem
      }

      .hsg-nav__dropdown-row:not(:last-child) {
        border-bottom: 1px solid #f6f9fc
      }
    }

    @media (max-width:899px) {
      .hsg-nav__dropdown-cards .hsg-nav__dropdown-row {
        border-bottom: 0
      }

      .hsg-nav-menu .hsg-nav__dropdown-cards {
        background-color: #f6f9fc
      }

      .hsg-nav__dropdown-cards .hsg-nav__box-link {
        position: relative;
        border: 1px solid #b6c7d6;
        border-radius: .1875rem;
        margin: 1rem;
        padding: 1rem 2.25rem 1rem 1rem;
        background: #fff
      }

      .hsg-nav__dropdown-cards .hsg-nav__box-link::after {
        content: "\E003";
        display: inline-block;
        position: absolute;
        right: 1.5rem;
        font-family: hsg-icons;
        line-height: 1;
        font-weight: 700;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        font-size: 1.25rem;
        color: #0b8484;
        align-self: center
      }
    }

    .hsg-nav__dropdown-cards .hsg-nav__box-link-icon {
      margin-right: .555rem;
      float: left;
      height: 2.2rem;
      width: 2.2rem;
      margin-bottom: 1rem;
      padding: 8px;
      display: inline-flex;
      flex-grow: 0;
      flex-shrink: 0
    }

    .hsg-nav__dropdown-cards .hsg-nav__dropdown-list-title {
      border-bottom: 0;
      padding: 1rem 0 0
    }

    .hsg-nav__dropdown-row--links-horizontal h3 {
      margin-right: 5px
    }

    @media (min-width:501px) {
      .hsg-nav__dropdown-row--links-horizontal h3 {
        margin-right: 1em
      }
    }

    .hsg-nav__dropdown-row--links-horizontal p {
      display: inline-block
    }

    .hsg-nav__header {
      position: relative
    }

    @media (max-width:899px) {
      .hsg-nav__dropdown-row--links-horizontal .hsg-nav__box-link {
        display: block
      }

      .hsg-nav__dropdown-row--links-horizontal p {
        width: 90%
      }

      .hsg-nav__header {
        font-size: 1rem;
        order: 1;
        font-weight: 500
      }
    }

    .hsg-nav__subheader {
      font-size: .875rem;
      margin: 0;
      font-weight: 400;
      line-height: 1.61
    }

    .hsg-nav__box-link {
      display: flex;
      padding: .75rem;
      border-bottom: 1px solid #b6c7d6
    }

    @media (min-width:900px) {
      .hsg-nav__dropdown-cards .hsg-nav__box-link-icon {
        margin-bottom: 0;
        background: #f6f9fc
      }

      .hsg-nav__box-link {
        background: 0 0;
        border-bottom: 0;
        border-radius: .1875rem;
        margin-bottom: 0;
        display: block
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-cards {
        max-width: 1080px;
        display: grid;
        display: -ms-grid;
        -ms-grid-columns: 1fr 4.55fr;
        grid: 3fr 0.25fr/1fr 4.55fr
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-cards .hsg-nav__header {
        font-size: 1.125rem;
        font-weight: 500
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-cards .hsg-nav__subheader-highlight::after {
        content: " →";
        color: #0b8484
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__header {
        margin-bottom: .5rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(3) {
        display: grid;
        display: -ms-grid;
        -ms-grid-columns: 1fr 1fr 1fr;
        grid: 1fr 1fr/1fr 1fr 1fr;
        -ms-grid-column: 2;
        margin: 0
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link {
        display: flex;
        margin: .7rem 0 0
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link:nth-child(2) {
        -ms-grid-column: 2
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link:nth-child(3) {
        -ms-grid-column: 3
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link:nth-child(4) {
        -ms-grid-row: 2
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link:nth-child(5) {
        -ms-grid-row: 2;
        -ms-grid-column: 2
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link .hsg-nav__header {
        margin-bottom: .5rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row--links:nth-child(2) {
        grid-area: 1/1/3/2;
        -ms-grid-row: 1;
        -ms-grid-column: 1;
        -ms-grid-row-span: 2;
        background: #f6f9fc;
        padding: 1rem;
        flex-direction: column;
        justify-content: flex-start
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row--links:nth-child(2) .hsg-nav__header {
        font-size: 1.125rem;
        font-weight: 500
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row--links:nth-child(2) .hsg-nav__subheader {
        font-size: .875rem;
        max-width: 8rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row--links-horizontal {
        grid-area: 2/2/3/3;
        -ms-grid-row: 2;
        -ms-grid-column: 2
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-row--links-horizontal .hsg-nav__box-link {
        display: flex;
        align-items: baseline;
        padding: 0 0 0 4.5rem;
        width: 100%
      }

      .hsg-nav__group-item--order-3 .hsg-nav__dropdown-list {
        width: 725px;
        left: 15%;
        flex-wrap: wrap;
        display: flex;
        flex-direction: column;
        height: 430px;
        padding: 1rem .5rem
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section {
        display: flex;
        padding: .75rem
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section-icon {
        width: 24px;
        padding: 0;
        height: auto;
        margin: 0
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section-icon-wrapper {
        margin-right: .555rem;
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: #f6f9fc
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section .hsg-nav__header {
        font-size: 1rem;
        font-weight: 700
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section .hsg-nav__subheader {
        font-size: 1rem;
        padding: .25rem 0 .5rem
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section .hsg-nav__box-link {
        padding: 0
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section a {
        color: #2e475d;
        font-weight: 400
      }
    }

    @media (max-width:899px) {
      .hsg-nav__group-item--order-1 .hsg-nav__header-container {
        max-width: 75%
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section {
        padding-bottom: .5rem
      }

      .hsg-nav__group-item--order-3 .hsg-nav__link-section a {
        font-weight: 500
      }

      .hsg-nav__group-item--order-3 .hsg-nav__dropdown-list-title,
      .hsg-nav__group-item--order-3 .hsg-nav__link-section-icon {
        display: none
      }

      .hsg-nav__group-item--order-3 .hsg-nav__header {
        font-size: 1.125rem;
        font-weight: 400;
        text-align: center
      }

      .hsg-nav__group-item--order-3 .hsg-nav__subheader {
        font-size: 1rem
      }

      .hsg-nav__group--primary .hsg-nav__link-wrapper {
        border: 1px solid #b6c7d6;
        border-radius: .1875rem;
        padding: 0;
        margin: 1rem;
        background: #f6f9fc;
        box-shadow: 0 1px 5px 0 rgba(33, 51, 67, .12)
      }

      .hsg-nav__group--primary .hsg-nav__link {
        padding: 1rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__header-container {
        max-width: 100%
      }
    }

    .hsg-nav__dropdown-list {
      position: absolute;
      background-color: #fff;
      z-index: 95
    }

    @media (min-width:900px) {
      .hsg-nav__dropdown-list {
        border: 1px solid #b6c7d6;
        border-radius: .1875rem;
        box-shadow: 0 1px 24px rgba(33, 51, 67, .12);
        max-height: calc(100vh - 100%);
        overflow: auto;
        top: 100%
      }

      #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--about .hsg-nav__dropdown-list {
        font-size: .875rem;
        right: 0;
        left: auto;
        width: auto
      }
    }

    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--has-dropdown .hsg-nav__link::after,
    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--has-dropdown .hsg-nav__link::before {
      box-sizing: content-box;
      display: inline-block;
      position: absolute;
      border-radius: .1875rem 0 0;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      width: 1rem;
      height: 1rem;
      content: "";
      opacity: 0
    }

    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--has-dropdown .hsg-nav__link::before {
      right: 1.1rem;
      bottom: calc(-.5rem - 2px);
      background-color: #b6c7d6;
      border: 1px solid #b6c7d6
    }

    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--has-dropdown .hsg-nav__link::after {
      right: calc(1.1rem + 1px);
      bottom: calc(-.5rem - 1px);
      background-color: #fff;
      z-index: 100
    }

    #hsg-nav-global .hsg-nav-top-bar {
      font-size: .75rem;
      background-color: #fff
    }

    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--utility {
      margin: 0 1rem
    }

    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--has-dropdown .hsg-nav__link::before {
      bottom: calc(-.5rem - 2px)
    }

    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--has-dropdown .hsg-nav__link::after {
      bottom: calc(-.5rem - 1px)
    }

    #hsg-nav-global .hsg-nav-top-bar .hsg-nav__group-item--has-contrast-toggle {
      top: 2px
    }

    #hsg-nav-global .hsg-nav__link-label--contact-us svg {
      vertical-align: middle;
      margin-right: .425rem;
      max-height: 1.8rem
    }

    #hsg-nav-global .hsg-nav__link-label--globe {
      line-height: 2.5
    }

    #hsg-nav-global .hsg-nav__globe-icon {
      vertical-align: top;
      margin-right: .425rem;
      display: inline-flex;
      width: .75rem;
      max-height: 1.8rem
    }

    .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c {
      max-width: 1080px;
      grid: 0.25fr 1fr 0.25fr/1fr;
      -ms-grid-columns: 1fr;
      background: #f6f9fc
    }

    @media (min-width:900px) {
      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) {
        grid-area: 1/1/2/2;
        -ms-grid-row: 1;
        -ms-grid-column: 1;
        -ms-grid-row-span: 1;
        margin: 32px 96px 0;
        padding: 0
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__dropdown-column {
        text-align: center
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__box-link {
        display: inline-block;
        padding: .75rem 4rem;
        background: #fff;
        border: 1px solid #eaf0f6;
        margin: .5rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__box-link .hsg-nav__header::after {
        content: " →";
        color: #0b8484
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__header-link {
        font-size: .875rem;
        color: #0b8484;
        font-weight: 600;
        padding-bottom: 0
      }
    }

    .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__box-link-none {
      padding: 0 .5rem;
      text-align: center;
      display: block
    }

    @media (max-width:899px) {
      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__box-link-none {
        margin-top: 24px
      }
    }

    .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__box-link-none .hsg-nav__header {
      font-size: 1.125rem;
      padding-bottom: 12px;
      font-weight: 500;
      margin: 0
    }

    .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__box-link-none .hsg-nav__subheader {
      max-width: 100%;
      margin-bottom: 12px
    }

    @media (max-width:1024px) {
      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(2) .hsg-nav__box-link-none .hsg-nav__subheader {
        max-width: 90%;
        margin: 0 auto 24px
      }
    }

    .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(3) {
      grid: 1fr 1fr/1fr 1fr 1fr;
      -ms-grid-columns: 1fr 1fr 1fr;
      -ms-grid-column: 1;
      -ms-grid-row: 2
    }

    .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__dropdown-row-description {
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      padding: .5rem 1rem
    }

    @media (min-width:900px) {
      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__dropdown-row-description {
        display: none
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(3) {
        margin: 0 96px 8px;
        padding: 0
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link {
        background: #fff;
        border: 1px solid #eaf0f6;
        padding: 16px;
        margin: .5rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__box-link-icon {
        height: 24px;
        width: 24px;
        padding: 0;
        background: #fff
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row:nth-child(3) .hsg-nav__header {
        font-size: 1rem;
        margin: 0;
        padding-bottom: .5rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row--links-horizontal {
        background: #fff;
        margin: 0;
        padding: 16px 96px;
        grid-area: 3/1/4/1;
        -ms-grid-row: 3;
        -ms-grid-column: 1;
        border-top: 1px solid #eaf0f6
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row--links-horizontal .hsg-nav__dropdown-column {
        width: 100%
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row--links-horizontal .hsg-nav__box-link {
        display: block;
        text-align: center;
        padding: 0
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row--links-horizontal .hsg-nav__header {
        font-size: 1rem;
        margin: 0;
        padding-bottom: .5rem
      }

      .hsg-nav__group-item--order-1 .hsg-nav__dropdown-variant-c .hsg-nav__dropdown-row--links-horizontal .hsg-nav__subheader {
        font-size: .75rem
      }
    }

    .homepage-hero-branding-rollout {
      overflow-x: hidden
    }

    .homepage-hero-branding-rollout[data-background=white] {
      background: #fef4ea
    }

    .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__content {
      align-items: normal;
      padding: 5.5rem 1rem
    }

    .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__text {
      white-space: normal;
      width: 100%
    }

    @media (min-width:1025px) {
      .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__content {
        padding: 6.5rem 0
      }

      .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__text {
        width: 55%
      }
    }

    .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__media {
      margin: 0;
      max-width: none;
      padding: 0;
      position: relative;
      width: 100%
    }

    @media (min-width:768px)and (max-width:1024px) {
      .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__media {
        width: 30%
      }
    }

    @media (min-width:1025px) {
      .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__media {
        margin: 0 0 0 auto;
        width: 45%
      }
    }

    .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__media-wrapper {
      margin-top: 2rem;
      padding: 0
    }

    .homepage-hero-branding-rollout__content {
      align-items: center;
      display: block;
      padding: 4.5rem 0
    }

    .homepage-hero-branding-rollout__text {
      white-space: nowrap;
      z-index: 2
    }

    @media (min-width:768px) {
      .homepage-hero-branding-rollout.right-aligned-image .homepage-hero-branding-rollout__media-wrapper {
        margin-top: 0;
        position: absolute;
        width: 780px
      }

      .homepage-hero-branding-rollout__content {
        display: flex
      }

      .homepage-hero-branding-rollout__text {
        width: 75%
      }
    }

    .homepage-hero-branding-rollout__text-title {
      margin: 0;
      white-space: break-spaces;
      width: auto
    }

    @media (min-width:1200px) {
      .homepage-hero-branding-rollout__text-title {
        width: 528px
      }
    }

    .homepage-hero-branding-rollout__text-microcopy {
      font-size: .875rem;
      text-align: left;
      white-space: break-spaces
    }

    .homepage-hero-branding-rollout__cta {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
      margin: 1.6rem 0 1rem
    }

    .homepage-hero-branding-rollout__cta-link {
      white-space: normal
    }

    .homepage-hero-branding-rollout__media {
      display: flex;
      margin: 1.5rem auto 0;
      max-width: 400px;
      padding: 0 2rem
    }

    @media (min-width:768px) {
      .homepage-hero-branding-rollout__cta {
        flex-direction: row
      }

      .homepage-hero-branding-rollout__cta-link {
        min-width: 235px
      }

      .homepage-hero-branding-rollout__media {
        margin: 0 0 0 auto;
        padding: 0;
        width: 50%
      }
    }

    .homepage-hero-branding-rollout__media-image--desktop {
      display: none
    }

    .homepage-hero-branding-rollout__media-image--mobile {
      display: block
    }

    @media (min-width:1200px) {
      .homepage-hero-branding-rollout__media {
        max-width: 630px;
        width: 630px
      }

      .homepage-hero-branding-rollout__media-wrapper {
        padding: 3rem 0;
        width: 630px
      }

      .homepage-hero-branding-rollout__media-image--desktop {
        display: block;
        position: relative;
        right: -20px
      }

      .homepage-hero-branding-rollout__media-image--mobile {
        display: none
      }
    }

    .cl-button {
      border: 1px solid;
      border-radius: 3px
    }

    .cl-button {
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      text-decoration: none
    }

    :root {
      --home-products-feature-icon-color: #ff5c35
    }

    .home-growth-stack {
      padding: 4.375rem 0
    }

    .home-growth-stack .home-growth-stack__logo-wrapper {
      margin: 0 auto 2rem;
      max-width: 100%;
      padding: 0 2rem;
      text-align: left;
      width: 802px
    }

    @media (min-width:1025px) {
      .home-growth-stack .home-growth-stack__logo-wrapper {
        margin: 0 auto 3.5rem
      }
    }

    .home-growth-stack .home-growth-stack__logo-header {
      margin-bottom: 1.25rem;
      margin-top: 0;
      text-align: left
    }

    @media (min-width:768px) {
      .home-growth-stack .home-growth-stack__logo-wrapper {
        padding: 0
      }

      .home-growth-stack .home-growth-stack__logo-header {
        margin-bottom: 1.875rem;
        text-align: center
      }

      .home-growth-stack .home-growth-stack__logo-description {
        padding: 0 2rem
      }
    }

    .home-growth-stack .home-growth-stack__logo-description {
      font-size: 1rem;
      margin-bottom: 0
    }

    .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-wrapper {
      padding: 0 1rem
    }

    @media (min-width:701px)and (max-width:1024px) {
      .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-header {
        text-align: center
      }
    }

    .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-description {
      text-align: left
    }

    .cl-button {
      border: 1px solid;
      border-radius: 3px;
      display: inline-block;
      font-size: 1rem;
      font-weight: 500;
      text-align: center;
      text-decoration: none
    }

    .cl-button.-primary {
      background-color: #11023a;
      border-color: transparent;
      color: #fff
    }

    .cl-button.-secondary {
      background-color: #fff;
      border-color: #0f0031;
      color: #ff5c35
    }

    .cl-button.-large {
      font-size: 1.125rem;
      line-height: 1.78;
      padding: 1rem 2.5rem
    }

    .hsg-page-width-normal {
      box-sizing: content-box;
      margin: 0 auto;
      max-width: 1080px;
      padding: 0 1rem
    }

    a,
    body,
    div,
    h1,
    h2,
    h3,
    h4,
    header,
    html,
    img,
    li,
    nav,
    p,
    section,
    span,
    ul {
      border: 0;
      font-size: 100%;
      font: inherit;
      margin: 0;
      padding: 0;
      vertical-align: baseline
    }

    header,
    nav,
    section {
      display: block
    }

    body {
      line-height: 1
    }

    ul {
      list-style: none
    }

    button {
      appearance: none;
      font: inherit;
      margin: 0
    }

    * {
      box-sizing: border-box
    }

    img {
      max-width: 100%
    }

    .visually-hidden:not(:focus):not(:active) {
      clip: rect(0, 0, 0, 0);
      border: 0;
      height: 1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      white-space: nowrap;
      width: 1px
    }

    input {
      font-family: Lexend Deca, Helvetica Neue, Helvetica, Arial, sans-serif
    }

    input::-webkit-search-cancel-button,
    input::-webkit-search-decoration {
      appearance: none
    }

    [data-background=white] {
      background-color: #fff
    }

    [data-background=off-white] {
      background-color: #f6f9fc
    }

    body {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      color: #2e475d;
      font-family: Lexend Deca, Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 1rem;
      font-weight: 300;
      line-height: 1.75;
      margin: 0;
      padding: 0
    }

    .h4,
    h1,
    h2,
    h3,
    h4 {
      margin: .5em 0
    }

    .h4,
    a,
    h1,
    h2,
    h3,
    h4,
    li,
    p,
    span {
      color: inherit;
      font-family: inherit
    }

    h1 {
      font-size: 2.25rem;
      font-weight: 600;
      line-height: 1.28
    }

    h1.-secondary {
      font-family: Queens Medium, serif;
      font-size: 2.25rem;
      font-weight: 500;
      line-height: 1.28
    }

    @media (min-width:768px) {
      .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-wrapper {
        padding: 0 1.25rem;
        width: 865px
      }

      .home-growth-stack.home-products-feature-v2 .home-growth-stack__logo-description {
        margin-top: 2.5rem;
        padding: 0
      }

      h1 {
        font-size: 3rem;
        font-weight: 500;
        line-height: 1.25
      }

      h1.-secondary {
        font-size: 3.75rem;
        line-height: 1.13
      }
    }

    h2 {
      font-size: 1.625rem;
      font-weight: 600;
      line-height: 1.38
    }

    @media (min-width:768px) {
      h2 {
        font-size: 2rem
      }
    }

    h3 {
      font-size: 1.5rem;
      line-height: 1.42
    }

    .h4,
    h3,
    h4 {
      font-weight: 500
    }

    .h4,
    h4 {
      font-size: 1.375rem;
      line-height: 1.45
    }

    p {
      font-size: 1rem;
      font-weight: 300;
      line-height: 1.75;
      margin-bottom: 1em;
      margin-top: 1em
    }

    a {
      color: #0b8484;
      font-weight: 500;
      text-decoration: none
    }

    .cta--primary,
    .cta--secondary {
      border: 0;
      border-radius: .1875rem;
      display: inline-block;
      font-weight: 500;
      line-height: 1.57;
      text-align: center;
      text-decoration: none
    }

    @media (max-width:767px) {

      .cta--primary,
      .cta--secondary {
        width: 100%
      }
    }

    .cta--secondary {
      background-color: #fff
    }

    .cta--secondary {
      border: 1px solid #ff5c35;
      color: #ff5c35
    }

    .cta--primary {
      background-color: #ff5c35;
      border: 1px solid #ff5c35;
      color: #fff
    }

    .cta--primary,
    .cta--secondary {
      font-size: .9375rem;
      min-width: 8.555rem;
      padding: .9em 1.388em
    }

    @media (min-width:851px) {
      .hsg-nav__dropdown-list-title {
        clip: rect(0, 0, 0, 0);
        border: 0;
        display: block;
        height: 1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        white-space: nowrap;
        width: 1px
      }
    }

    @media (max-width:850px) {
      .hsg-nav__group-item--order-3 .hsg-nav__dropdown-list-title {
        clip: rect(0, 0, 0, 0);
        border: 0;
        display: block;
        height: 1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        white-space: nowrap;
        width: 1px
      }
    }

    .hsg-nav__dropdown-list-title-text {
      all: unset
    }

    .body-container-wrapper {
      overflow-x: hidden
    }

    .cls-1 {
      fill: none
    }

    .cls-2 {
      fill: #2e475d;
      clip-path: url(#clip-path)
    }

    .cls-3 {
      fill: #ff7a59;
      clip-path: url(#clip-path-2)
    }
  </style><!--critical_css:end!--> </style>



  <script nonce="7urWKdsavOuOY1tEDAtGXQ==">
    window.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('link[rel="preload"]').forEach(function(e) {
        e.setAttribute("rel", "stylesheet");
      });
    });
  </script>
  <style>
    .hide {
      display: none;
    }
  </style>


  <meta name="generator" content="DAST">
  </head>

  <body>



    <!--?xml version="1.0" encoding="utf-8"?--> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none">
      <symbol viewbox="0 0 60 23.7" id="add-on-label">
        <path fill="#CECECE" d="M60 1.4c.1-.3-.1-.6-.4-.6h-.4l-3.4 10.5v.3l3.4 10.7c.1.3-.1.6-.4.6H.8v.3c0 .2.2.4.4.4h58.3c.3 0 .5-.3.4-.6l-3.4-10.7V12L60 1.4z" />
        <path fill="#F7751F" d="M11.3 12.4h2l-1-3z" />
        <path fill="#F7751F" d="M4.1 22.9h54.7c.3 0 .5-.3.4-.6l-3.4-10.7v-.3L59.2.8l.1-.2c0-.3-.2-.6-.5-.6H4.1v22.9zm10.1-7.8l-.4-1.1h-3l-.4 1.1H8.3l2.8-7.3h2.4l2.8 7.3h-2.1zm5.7 0h-3.1V7.8h3.1c2.3 0 4 1.4 4 3.7s-1.8 3.6-4 3.6zm7.9 0h-3.1V7.8h3.1c2.3 0 4 1.4 4 3.7s-1.7 3.6-4 3.6zm7-3.1h-2.1v-1.1h2.1V12zm4.8 3.2c-2.2 0-3.9-1.6-3.9-3.8s1.7-3.8 3.9-3.8 3.9 1.6 3.9 3.8-1.7 3.8-3.9 3.8zm11.6-.1h-1.8l-3.1-4.4v4.4h-1.9V7.8h1.9l3 4.2V7.8h1.9v7.3z" />
        <path fill="#F7751F" d="M19.9 9.4h-1.2v4h1.2c1.3 0 2-.9 2-2s-.7-2-2-2zM39.6 9.3c-1.2 0-2 .9-2 2.1 0 1.2.8 2.1 2 2.1s2-.9 2-2.1c0-1.1-.8-2.1-2-2.1zM27.8 9.4h-1.2v4h1.2c1.3 0 2-.9 2-2 .1-1.1-.6-2-2-2z" />
        <path fill="#3B3F3F" d="M4.1 0H.4C.2 0 0 .2 0 .4v22c0 .2.2.4.4.4H4V0z" />
        <path fill="#FFF" d="M11.1 7.8l-2.8 7.3h2.1l.4-1.1h3l.4 1.1h2.1l-2.8-7.3h-2.4zm.2 4.6l1-3 1 3h-2zM19.8 7.8h-3.1v7.3h3.1c2.3 0 4-1.4 4-3.7s-1.7-3.6-4-3.6zm0 5.7h-1.2v-4h1.2c1.3 0 2 .9 2 2 .1 1-.7 2-2 2zM27.8 7.8h-3.1v7.3h3.1c2.3 0 4-1.4 4-3.7s-1.7-3.6-4-3.6zm0 5.7h-1.2v-4h1.2c1.3 0 2 .9 2 2 .1 1-.7 2-2 2zM32.7 10.9h2.1V12h-2.1zM39.6 7.7c-2.2 0-3.9 1.6-3.9 3.8s1.7 3.8 3.9 3.8 3.9-1.6 3.9-3.8-1.7-3.8-3.9-3.8zm0 5.9c-1.2 0-2-.9-2-2.1 0-1.2.8-2.1 2-2.1s2 .9 2 2.1c0 1.1-.8 2.1-2 2.1zM49.3 12l-2.9-4.2h-2v7.3h1.9v-4.4l3.1 4.4h1.8V7.8h-1.9z" />
      </symbol>
      <symbol viewbox="0 0 20 20" id="facebook-icon">
        <path fill="#FFF" d="M18.9 0H1.1C.5 0 0 .5 0 1.1v17.8c0 .6.5 1.1 1.1 1.1h9.6v-7.7H8.1v-3h2.6V7c0-2.6 1.6-4 3.9-4 1.1 0 2.1.1 2.3.1v2.7h-1.6c-1.3 0-1.5.6-1.5 1.5v1.9h3l-.4 3h-2.6V20h5.1c.6 0 1.1-.5 1.1-1.1V1.1c0-.6-.5-1.1-1.1-1.1z" />
      </symbol>
      <symbol viewbox="0 0 18 18" id="grey-search-icon">
        <circle fill="none" cx="7.5" cy="7.5" r="4" />
        <path fill="#555" d="M7.5 13.5c1.3 0 2.5-.4 3.5-1.1l3.8 3.8c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L12.4 11c.7-1 1.1-2.2 1.1-3.5 0-3.3-2.7-6-6-6s-6 2.7-6 6 2.7 6 6 6zm0-10c2.2 0 4 1.8 4 4s-1.8 4-4 4-4-1.8-4-4 1.8-4 4-4z" />
      </symbol>
      <symbol viewbox="0 0 75.9 22" id="hubspot-grey-logo-footer">
        <g fill="#B3B3B3">
          <path d="M8.2 10H2.6V4.1H0v14.4h2.6v-6h5.6v6h2.7V4.1H8.2zM19.3 13.8c0 1.2-1 2.2-2.2 2.2s-2.2-1-2.2-2.2V7.6h-2.5v6.2c0 2.6 2.1 4.7 4.7 4.7s4.7-2.1 4.7-4.7V7.6h-2.5v6.2zM28.8 7.7c-1.2 0-2.1.4-3 1.2V4.1h-2.5v8.8c0 3.3 2.4 5.6 5.1 5.6 3 0 5.6-2.3 5.6-5.4s-2.4-5.4-5.2-5.4zm0 8.5c-1.7 0-3-1.4-3-3.1s1.3-3.1 3-3.1c1.4 0 2.8 1.4 2.8 3.1 0 1.7-1.3 3.1-2.8 3.1zM38.2 8.3c0-1.3.8-1.7 1.8-1.7.7 0 1.7.6 2.4 1.2L44 6c-.8-1.1-2.5-1.9-3.9-1.9-2.7 0-4.7 1.6-4.7 4.2 0 4.9 6 3.3 6 6.1 0 .8-.8 1.6-1.8 1.6-1.5 0-2-.7-2.6-1.5l-1.8 1.9c1.2 1.4 2.6 2.1 4.3 2.1 2.6 0 4.7-1.6 4.7-4.1 0-5.4-6-3.7-6-6.1zM50.9 7.5c-2.7 0-5.1 2.3-5.1 5.6V22h2.5v-4.8c.8.8 1.7 1.2 3 1.2 2.8 0 5.2-2.3 5.2-5.4 0-3.1-2.7-5.5-5.6-5.5zm.4 8.6c-1.7 0-3-1.4-3-3.1s1.3-3.1 3-3.1c1.4 0 2.8 1.4 2.8 3.1 0 1.6-1.4 3.1-2.8 3.1zM75 16.2c-1.5 0-1.9-.6-1.9-1.6v-4.4h2.3V8h-2.3V5.1l-2.5 1.1v8.9c0 2.3 1.6 3.4 3.7 3.4.3 0 .8 0 1-.1l.6-2.3c-.3.1-.6.1-.9.1z" />
          <path d="M68.4 10.3c-.5-.8-1.2-1.5-2-2-.6-.4-1.3-.6-2-.7V5c.7-.3 1.2-1 1.2-1.8 0-1.1-.9-2-2-2s-2 .9-2 2c-.1.8.4 1.5 1.1 1.8v2.6c-.7.1-1.2.3-1.8.6-1.1-.9-4.9-3.7-7.1-5.4.1-.2.1-.4.1-.6 0-1.2-1-2.2-2.2-2.2s-2.2 1-2.2 2.2 1 2.2 2.2 2.2c.4 0 .8-.1 1.1-.3l.5.4 6.4 4.6c-.3.3-.6.7-.9 1.1-.5.8-.8 1.7-.8 2.7v.2c0 .7.1 1.3.3 1.9.2.5.5 1 .8 1.4L57 18.5c-.2-.1-.4-.1-.6-.1-.5 0-.9.2-1.2.5s-.5.8-.5 1.2c0 .5.2.9.5 1.2.3.3.8.5 1.2.5.5 0 .9-.2 1.2-.5s.5-.8.5-1.2c0-.2 0-.4-.1-.5l2.2-2.2c.3.2.6.4 1 .5.7.3 1.4.5 2.3.5h.2c.9 0 1.8-.2 2.6-.7.9-.5 1.5-1.1 2-1.9.5-.8.8-1.7.8-2.7 0-1-.3-1.9-.7-2.8zm-2.7 4.6c-.6.7-1.3 1-2 1h-.1c-.4 0-.9-.1-1.3-.3-.5-.2-.8-.6-1.1-1s-.5-.9-.5-1.4V13c0-.5.1-1 .3-1.4.3-.5.6-.9 1.1-1.2.4-.3.9-.4 1.5-.4.5 0 .9.1 1.4.3.4.2.8.6 1.1 1 .3.4.4.9.5 1.4v.3c-.1.7-.4 1.3-.9 1.9z" />
        </g>
      </symbol>
      <symbol viewbox="0 0 101 29.3" id="hubspot-main-logo">
        <path fill="none" d="M87.8 15.1c-.4-.6-.9-1-1.4-1.3-.6-.3-1.2-.4-1.8-.4h-.1c-.7 0-1.4.2-2 .6-.6.4-1.1.9-1.4 1.5-.3.6-.5 1.2-.5 1.9v.2c0 .7.2 1.3.6 1.8.4.6.9 1 1.5 1.4.6.3 1.1.4 1.7.4h.2c1 0 1.9-.5 2.7-1.4.7-.8 1-1.6 1-2.5v-.4c.1-.6-.1-1.2-.5-1.8zM68.3 13.1c-2.3 0-4 1.9-4 4.1s1.7 4.1 4 4.1c1.9 0 3.7-1.9 3.7-4.1-.1-2.2-1.8-4.1-3.7-4.1zM38.4 13.3c-2.3 0-4 1.9-4 4.1s1.7 4.1 4 4.1c1.9 0 3.7-1.9 3.7-4.1-.1-2.2-1.8-4.1-3.7-4.1z" />
        <path fill="#4F4F4F" d="M11 13.3H3.5V5.5H0v19.2h3.5v-8H11v8h3.5V5.5H11zM25.6 18.4c0 1.6-1.3 2.9-2.9 2.9s-2.9-1.3-2.9-2.9v-8.3h-3.3v8.3c0 3.4 2.8 6.3 6.3 6.3 3.4 0 6.3-2.8 6.3-6.3v-8.3h-3.3v8.3h-.2zM38.3 10.2c-1.7 0-2.8.5-3.9 1.6V5.5H31v11.8c0 4.4 3.2 7.4 6.8 7.4 4 0 7.5-3.1 7.5-7.2s-3.3-7.3-7-7.3zm.1 11.4c-2.3 0-4-1.9-4-4.1s1.7-4.1 4-4.1c1.9 0 3.7 1.9 3.7 4.1-.1 2.2-1.8 4.1-3.7 4.1zM50.9 11.1c0-1.7 1.1-2.2 2.4-2.2 1 0 2.3.7 3.2 1.7L58.6 8c-1.1-1.5-3.3-2.5-5.1-2.5-3.6 0-6.3 2.1-6.3 5.6 0 6.5 8 4.4 8 8.1 0 1.1-1.1 2.1-2.4 2.1-2 0-2.6-1-3.5-2l-2.4 2.5c1.6 1.9 3.5 2.9 5.8 2.9 3.4 0 6.2-2.1 6.2-5.5 0-7.2-8-5-8-8.1zM75.2 17.3c0-4.1-3.5-7.2-7.5-7.2-3.6 0-6.8 3-6.8 7.4v11.8h3.4v-6.4c1.1 1.1 2.3 1.6 3.9 1.6 3.7 0 7-3.1 7-7.2zm-6.9 4.1c-2.3 0-4-1.9-4-4.1s1.7-4.1 4-4.1c1.9 0 3.7 1.9 3.7 4.1-.1 2.2-1.8 4.1-3.7 4.1zM99.8 21.6c-2 0-2.5-.9-2.5-2.2v-5.8h3.1v-2.9h-3.1V6.8l-3.4 1.5v11.8c0 3 2.1 4.5 4.9 4.5.4 0 1 0 1.3-.1l.8-3c-.3 0-.7.1-1.1.1z" />
        <path fill="#F37622" d="M88.3 11.1c-.8-.5-1.7-.8-2.7-.9V6.7c1-.4 1.6-1.3 1.6-2.4 0-1.5-1.2-2.7-2.7-2.7s-2.6 1.2-2.6 2.7c0 1.1.6 2 1.6 2.4v3.5c-.9.1-1.6.4-2.4.7-1.5-1.2-6.5-5-9.5-7.2.1-.3.1-.5.1-.8 0-1.6-1.3-3-3-3-1.6 0-3 1.3-3 3 0 1.6 1.3 3 3 3 .6 0 1.1-.2 1.5-.4l.6.5 8.5 6.1c-.4.4-.8.9-1.2 1.4-.7 1.1-1.1 2.3-1.1 3.5v.3c0 .9.1 1.8.4 2.6.3.7.6 1.3 1.1 1.9l-2.8 2.8c-.2-.1-.5-.1-.8-.1-.6 0-1.2.2-1.6.7-.4.4-.7 1-.7 1.6s.2 1.2.7 1.6c.4.4 1 .7 1.6.7s1.2-.2 1.6-.7c.4-.4.7-1 .7-1.6 0-.2 0-.5-.1-.7l2.9-2.9c.4.3.8.5 1.3.7.9.4 1.9.6 3 .6h.2c1.2 0 2.4-.3 3.5-.9s2-1.5 2.7-2.5c.7-1.1 1.1-2.3 1.1-3.6v-.1c0-1.3-.3-2.5-.9-3.6-.5-1.1-1.4-2-2.6-2.7zm-.9 8.7c-.8.9-1.7 1.4-2.7 1.4h-.2c-.6 0-1.2-.1-1.7-.4-.6-.3-1.1-.8-1.5-1.4s-.6-1.2-.6-1.8v-.2c0-.7.1-1.3.5-1.9.3-.6.8-1.1 1.4-1.5s1.2-.6 2-.6h.1c.6 0 1.3.1 1.8.4.6.3 1.1.7 1.4 1.3.4.6.6 1.2.6 1.8v.4c0 1-.4 1.8-1.1 2.5z" />
      </symbol>
      <symbol viewbox="0 0 21 10.4" id="inboundorg-icon">
        <path fill="#FFF" d="M20.9 4c0-.1 0-.2-.1-.3 0-.1 0-.1-.1-.2 0-.1 0-.1-.1-.2 0-.1-.1-.2-.1-.3 0-.1-.1-.2-.1-.2s0-.1-.1-.1c-.2-.4-.5-.8-.9-1.2l-.1-.1c-.1-.2-.3-.4-.6-.6-.5-.3-1.1-.6-1.8-.7-.3-.1-.7-.1-1.1-.1h-.6-.1c-.2 0-.3 0-.5.1h-.1c-1.1.3-2.1.8-3 1.7l-.4.4c-.2.2-.4.4-.6.7L8.8 5.2c-.2.3-.3.5-.5.7l-.2.2c-.1.1-.2.2-.2.3-.9.8-1.8 1.2-2.6 1.2-.5 0-1-.1-1.4-.4l-.3-.3-.1-.1c-.4-.7 0-1.5.3-1.5-.4-.2-.8-1-.2-1.8l.1-.1c.4-.4 1-.6 1.6-.6.8 0 2.1.8 3 1.7 0 0 .1-.1.1-.2l1.5-1.9v-.1c0-.1.1-.1.1-.1C8.9 1 7.3.2 5.8 0h-.5C2.4 0 .1 2.3 0 5.1v.1c0 .4 0 .8.1 1.2 0 .1 0 .2.1.3 0 .1 0 .1.1.2 0 .1 0 .1.1.2 0 .1.1.2.1.3 0 .1.1.2.1.2s0 .1.1.1c.2.4.5.8.9 1.2l.1.1c.1.2.3.4.6.6.4.2.8.4 1.3.6.5.2 1.1.3 1.6.3h.2c.2 0 .3 0 .4-.1h.1c.2 0 .3 0 .5-.1h.1c1.1-.3 2.1-.8 3-1.7.2-.2.3-.4.4-.6.2-.2.4-.4.6-.7l1.7-2.2c.2-.2.3-.5.5-.7.1-.1.1-.2.2-.2s.1-.1.2-.2c.9-.8 1.8-1.3 2.6-1.3.5 0 1 .1 1.4.4l.3.3c.1.1.1.1.1.2.4.7 0 1.5-.3 1.5.4.1.8 1 .2 1.7l-.1.1c-.4.4-1 .6-1.6.6-.8 0-2.1-.8-3-1.7 0 0 0 .1-.1.2l-1.5 1.9V8l-.1.1c1.2 1.2 2.8 2 4.3 2.2h.6c.8 0 1.6-.1 2.2-.4.1 0 .2-.1.3-.1h.1c.1 0 .1-.1.2-.1.4-.2.7-.4 1-.7.5-.5.8-1 1.1-1.6v-.1c0-.1.1-.2.1-.2 0-.1.1-.2.1-.2v-.1c-.1-.7 0-1.1 0-1.6 0-.4 0-.8-.1-1.2z" />
      </symbol>
      <symbol viewbox="0 0 20 20" id="instagram-icon">
        <g fill="#FFF">
          <path d="M10 1.8c2.7 0 3 0 4 .1 1 0 1.5.2 1.9.3.5.2.8.4 1.1.8.3.3.6.7.7 1.1.2.4.4.9.4 1.9 0 1.1.1 1.4.1 4s0 3-.1 4c0 1-.2 1.5-.3 1.9-.2.5-.4.8-.7 1.1-.3.3-.7.6-1.1.7s-.9.3-1.9.3c-1.1 0-1.4.1-4 .1s-3 0-4-.1c-1 0-1.5-.2-1.9-.3-.6-.1-.9-.3-1.2-.7-.3-.3-.6-.7-.7-1.1-.2-.4-.4-.9-.4-1.9 0-1.1-.1-1.4-.1-4s0-3 .1-4c0-1 .2-1.5.3-1.9.2-.5.4-.8.8-1.1.3-.3.7-.6 1.1-.7.4-.2.9-.4 1.9-.4 1-.1 1.3-.1 4-.1M10 0C7.3 0 6.9 0 5.9.1 4.8.1 4.1.3 3.5.6c-.7.2-1.3.5-1.8 1.1-.6.5-.9 1.1-1.2 1.7-.2.7-.4 1.4-.4 2.5C0 6.9 0 7.3 0 10s0 3.1.1 4.1c0 1.1.2 1.8.5 2.4.3.7.6 1.2 1.2 1.8.6.6 1.1.9 1.8 1.2.6.2 1.4.4 2.4.5h4c2.7 0 3.1 0 4.1-.1 1.1 0 1.8-.2 2.4-.5.7-.3 1.2-.6 1.8-1.2.6-.6.9-1.1 1.2-1.8.2-.6.4-1.4.5-2.4 0-1.1.1-1.4.1-4.1s0-3.1-.1-4.1c0-1.1-.2-1.8-.5-2.4-.3-.7-.6-1.2-1.2-1.8S17.2.7 16.5.4c-.6-.2-1.4-.4-2.4-.5-1 .1-1.4.1-4.1.1z" />
          <path d="M10 4.9c-2.8 0-5.1 2.3-5.1 5.1s2.3 5.1 5.1 5.1 5.1-2.3 5.1-5.1-2.3-5.1-5.1-5.1zm0 8.4c-1.8 0-3.3-1.5-3.3-3.3S8.2 6.7 10 6.7s3.3 1.5 3.3 3.3-1.5 3.3-3.3 3.3z" />
          <circle cx="15.3" cy="4.7" r="1.2" />
        </g>
      </symbol>
      <symbol viewbox="0 0 20 20" id="linkedin-icon">
        <path fill="#FFF" d="M18.5 0h-17C.7 0 0 .6 0 1.4v17.1c0 .9.7 1.5 1.5 1.5h17c.8 0 1.5-.6 1.5-1.4V1.4c0-.8-.7-1.4-1.5-1.4zM5.9 17H3V7.5h3L5.9 17zM4.4 6.2c-1 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7c.1.9-.7 1.7-1.7 1.7zM17 17h-3v-4.6c0-1.1 0-2.5-1.5-2.5s-1.8 1.2-1.8 2.5V17h-3V7.5h2.8v1.3c.4-.8 1.4-1.5 2.8-1.5 3 0 3.6 2 3.6 4.5V17h.1z" />
      </symbol>
      <symbol viewbox="0 0 18.9 16" id="medium-icon">
        <g fill="#FFF">
          <path d="M18.8 2.9L13.1 0H12.8c-.2 0-.4.1-.6.3L9 5.6l4.1 6.7 5.7-9.4c.1.1.1 0 0 0zM7.2 4.4v6.1l5.4 2.7zM13.4 13.6l4.4 2.2c.6.3 1 .1 1-.5V4.7l-5.4 8.9zM6.3 2.9L.7.2C.6.1.5.1.4.1.2.1 0 .3 0 .6v12c0 .3.2.7.5.8l4.9 2.5c.2.1.3.1.4.1.3 0 .5-.2.5-.6V2.9c0 .1 0 0 0 0z" />
        </g>
      </symbol>
      <symbol viewbox="0 0 18 18" id="orange-globe-icon">
        <path fill="#F7751F" d="M9 .6c4.6 0 8.4 3.8 8.4 8.4s-3.8 8.4-8.4 8.4S.6 13.6.6 9 4.4.6 9 .6M9 0C4 0 0 4 0 9s4 9 9 9 9-4 9-9-4-9-9-9z" />
        <defs>
          <circle id="ja" cx="9" cy="9" r="8.4" />
        </defs>
        <clippath id="jb">
          <use xlink:href="#ja" overflow="visible" />
        </clippath>
        <g clip-path="url(#jb)" fill="#F7751F">
          <path d="M18.3 9v0zM18.3 8.9v-.2.2c0 .1 0 0 0 0zM18.3 9.7v0zM7.6-.2h0zM9.7-.3h.3-.3zM6.8 0zM6.4.1zM7.2-.1c.1 0 0 0 0 0zM6 .2zM18.2 7.4zM18.2 10.1v0zM12 .2zM10.6-.2h.2c-.1.1-.1.1-.2 0zM11.1-.1h.1c0 .1-.1 0-.1 0zM9-.3h.4H9zM8.5-.3h.4-.4zM10.2-.2h.2-.2zM-.1 7.1c0-.1 0-.1 0 0 0-.1 0-.1 0 0zM8.1-.3h.2-.2zM12.4.3zM18 6.5zM11.5.1c.1 0 .1 0 0 0 .1 0 .1 0 0 0zM18.2 7.7v0zM11.2 18c-.1 0-.2 0-.3.1.1 0 .2 0 .3-.1zM-.3 8.4v-.3.3zM11.6 17.9h-.1.1zM-.3 9v-.4.4zM9.9 18.3h-.3.3zM9.4 18.3H9h.4zM-.2 7.9v-.2.2zM-.2 7.5v-.2.2zM10.8 18.1h-.2c0 .1.1 0 .2 0zM10.4 18.2H10h.4zM18.2 10.6v0zM12 17.8c-.1 0-.1 0 0 0-.1 0-.1 0 0 0zM8.3-.3h0zM-.1 7.3V7v.3zM9.5-.3h.2-.2zM11.9 17.8c-.1 0-.2.1-.2.1s.1 0 .2-.1zM10.9 18.1h-.2.2zM10.5 18.2h-.2.2zM11.5 18c-.1 0-.2.1-.3.1.1-.1.2-.1.3-.1zM-.2 7.7v-.2.2zM6.9-.1c.1 0 .2-.1.3-.1-.1.1-.2.1-.3.1zM6 .2c.1 0 .3-.1.4-.1-.2 0-.3.1-.4.1zM-.3 8.1v-.2c.1.1 0 .2 0 .2zM6.4.1c.1-.1.3-.1.4-.1-.1 0-.3 0-.4.1zM-.3 8.6v-.2.2zM7.8-.2h.3-.3zM9.5 18.3h-.1.1zM10 18.3h-.1.1zM7.3-.2c.1 0 .2 0 .3-.1-.1.1-.2.1-.3.1zM10.8-.1c.1 0 .2 0 .3.1-.1-.1-.2-.1-.3-.1zM4.5 3.1v-.2h-.2L4 3l.1.1h.4zM5.5 4.5l-.2.1v.1H6v-.1h-.1v-.1zM1.8 4.4c-.1.2-.2.4-.4.6l.4-.4v-.2zM5.2 3.9L5 3.8l-.2.1.1.3.2-.1z" />
          <path d="M16.5 5.9l-.2-.2v-.4l-.3.1-.1.5-.3-.4v-.3l-.3-.3-.1-.1h-.4l.1.3.4.2.1.1h-.1v.3l-.2.1h-.2l-.1-.2h.3l.1-.1-.7-.5-.1-.2-.3.2-.3-.1-.4.5-.1.2h-.7l-.2-.1-.1-.5.1-.2.5.2.4.1.1-.2h-.2l.1-.4.4-.1.3-.5.3-.1h.4l-.1-.4-.3.1-.1-.3H14V3l.2-.2.4-.2.1-.2C13.1 1.3 11.2.5 9 .5c-1.9 0-3.6.6-5 1.6h.4l.2.1.4.1v.1h.6l-.1-.1-.5-.1.1-.1V2h-.5l.5-.4h.5l.2.3h.4l.2-.2.2.1-.3.3h-.4v.3h.5l.1-.1h.4v-.2L6.7 2l.1-.2.2-.1h.6l-.4.4.1.2h.3v-.4l.3-.2.6-.1.8.4v.3l.3.1-.3.3h-.4l-.1.3-.8-.2.7-.3-.3-.3-.5.1v.1l-.3.1h-.3v.1h.1-.2v.1l-.2.2v-.3l-.4.2-.7.4.1.3.2.1.4.1v.5h.2l.2-.4.5-.1v-.6l.3-.2.5.1v.4h.2l.4-.2v.5l.3.2v.3l-.3.1v.1l.4.2v.2h-.1l-.5-.2v-.2l.1-.1h-.1v.1h-.4l-.1-.1h-.4v.2h.4l-.3.2v-.1h-.1l-.4.3-.6.4-.5.5V6l-.5.4-.3.3v.5L5.2 7v-.3h-1l-.6.3-.2.4-.1.3.1.3.4.1.7-.4.1.2-.2.4.5.1.1.8.7.1.4-.5.5.1.2.3h.5v-.1l.3.1.3.5h.5l.2.3v.4l.6.2h.8l.2.4.3.1-.1.3-.4.5-.1 1-.3.3h-.5l-.1.1.1.5-.5.7-.2.3-.5.2-.3.1v.1l.2.1v.2l-.2.2.1.2H8v.2l-.1.2v.2l.4.3v.2h-.5l-.5-.4-.4-.7.1-.7-.3-.4-.1-.8h-.2v-1.5l-.5-.4-.3-.1-.1-.3L5 11l.1-.3v-.5l.4-.3v-.5h-.7l-.5-.6-.4-.1h-.2v-.2h-.3v.1l-.7-.3-.3-.5.1-.2-.5-.7v-.5h-.2l.1.5.3.5v.2h-.3L1.5 7v-.7l-.4-.2v-.4c.1-.3.2-.5.3-.7-.1.2-.2.4-.3.7C.7 6.7.5 7.8.5 9c0 4.7 3.8 8.5 8.5 8.5 2.7 0 5.1-1.2 6.6-3.2h-.3v-.6l-.3-.3v-.7l-.2-.2v-.3l.3-.6-.6-1.1.1-.7-.6-.1-.2-.2h-.4l-.2.2h-.6v.1h-.4l-.8-.9v-.7l.1-.1.1-.3h-.2l-.1-.3.9-.7v-.5l.5-.3H13.3l.3-.2 1-.1v.5l.8.2.1.1h.1v-.1h.4l.4.3h.7c0-.3-.1-.6-.1-.8h-.5zm-3.6-2.4l.1-.1.3-.1.1.3.1.2.1.2.2.1-.2.2H13V4h.2v-.1l-.2-.1-.1-.1v-.2zm-.4.5l.2-.3.2-.1.1.2V4l-.4.2h-.2l.1-.2zM7.8 5.1h-.2V5l.1-.1.1.2zm.7-.2h-.1V5H8.1v-.1H8h.2l.1-.1.2.1z" />
          <path d="M16.8 5.5c-.1-.1-.1-.3-.2-.4l-.1.1v.4l.3-.1zM15.5 3.9l.2-.3c-.1-.2-.3-.3-.4-.5v.4l-.4.2v.1l.6.1zM4.5 2.6v-.1H4v.2h.4zM6 4.5v.2h.2zM6.3 5V5.3h.3v-.2zM6.4 4.8v.1h.2zM17.3 7.1l.1.1-.1-.1zM17.3 13.2c-1.1 2.1-3 3.8-5.3 4.6 3.2-1.1 5.6-3.8 6.2-7.1 0 .2-.1.3-.1.5-.2.7-.5 1.4-.8 2zM5.9 5.1h.2l.1-.1v-.2h-.3zM5.9 5.2h-.1l-.1.2H6l.1-.1v-.2zM5.2 5.2l.2.1.3-.5h-.2l-.2.2zM18.3 9.9v.3c-.1-.2 0-.2 0-.3zM18.2 7.5v0zM18.3 9.4v0zM18 6.5c.1.3.1.6.2.9-.1-.3-.2-.6-.2-.9zM9.9-.3h.2c0 .1-.1.1-.2 0zM18.2 10.3v0zM11.2 0c.1 0 .2.1.3.1-.1-.1-.2-.1-.3-.1zM12 .2c.1 0 .2.1.4.1-.1 0-.2-.1-.4-.1zM10.4-.2h.3-.3zM11.6.1c.1 0 .2.1.3.1 0-.1-.2-.1-.3-.1zM-.3 9c0 5.1 4.2 9.3 9.3 9.3-5.1 0-9.3-4.2-9.3-9.3zM18.3 8.7c0-.3 0-.6-.1-.9V8c.1.3.1.5.1.7zM9-.3zM2.7 2.2c.9-.9 2-1.5 3.3-2C3 1.2.6 3.8-.1 7c.3-1.4.9-2.6 1.7-3.7.4-.4.7-.8 1.1-1.1zM18.3 9z" />
          <path d="M15.7 2.5c0 .1.1.1.1.2.7.8 1.3 1.7 1.7 2.7 0 .1 0 .1.1.2l.3.9C17.1 3.7 15 1.4 12.4.4c1.1.4 2 1 2.8 1.8.2.1.3.2.5.3z" />
        </g>
      </symbol>
      <symbol viewbox="0 0 18 18" id="orange-telephone-icon">
        <path fill="none" d="M9 10.9c-1.3 0-2.3 1-2.3 2.3s1 2.3 2.3 2.3 2.2-1 2.2-2.3c.1-1.3-.9-2.3-2.2-2.3z" />
        <path fill="#F7751F" d="M0 7l1.6 2.3 2.9-1.6c.6-.3.6-1.6.6-1.6 1.6-1 6.1-1 7.7 0 0 0 0 1.3.6 1.6l2.9 1.6L18 7C13.8 2.2 4.2 2.2 0 7z" />
        <path fill="#F7751F" d="M1.3 17.7c0 .3 0 .3.3.3h14.8c.3 0 .3 0 .3-.3.7-12.3-16.1-12.3-15.4 0zM9 15.4c-1.3 0-2.3-1-2.3-2.3s1-2.3 2.3-2.3 2.2 1 2.2 2.3c.1 1.3-.9 2.3-2.2 2.3z" />
      </symbol>
      <symbol viewbox="0 0 16 16" id="pinterest-icon">
        <path fill="#FFF" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 15.1c-.7 0-1.4-.1-2.1-.3.3-.5.7-1.2.9-1.9.1-.3.4-1.7.4-1.7.2.4.9.8 1.6.8 2.1 0 3.7-2 3.7-4.4 0-2.3-1.9-4.1-4.4-4.1-3.1 0-4.7 2.1-4.7 4.3 0 1 .6 2.3 1.4 2.8.1.1.2 0 .2-.1s.1-.6.2-.8v-.2c-.2-.4-.5-1-.5-1.6 0-1.6 1.2-3.1 3.2-3.1 1.7 0 3 1.2 3 2.9 0 1.9-1 3.3-2.2 3.3-.7 0-1.2-.6-1.1-1.3.2-.8.6-1.8.6-2.4 0-.5-.3-1-.9-1C6.6 6.3 6 7 6 8c0 .6.3 1 .3 1s-.7 3-.8 3.5c-.1.6-.1 1.5 0 2C2.8 13.6.9 11 .9 8 .9 4.1 4.1.9 8 .9s7.1 3.2 7.1 7.1c0 3.9-3.2 7.1-7.1 7.1z" />
      </symbol>
      <symbol viewbox="0 0 18 20.6" id="podcast-icon">
        <path fill="none" d="M8.5 10.3h1.1c1 0 1.8.6 1.8 1.4 1-.7 1.7-2 1.7-3.3 0-2.2-1.8-4.1-4.1-4.1S4.9 6.1 4.9 8.4c0 1.4.7 2.6 1.8 3.3 0-.8.7-1.4 1.8-1.4zM9 5.8c1.2 0 2.1 1 2.1 2.1S10.1 10 9 10s-2.1-.8-2.1-2S7.8 5.8 9 5.8z" />
        <path fill="none" d="M9 1.3C4.8 1.3 1.3 4.8 1.3 9c0 3.6 2.4 6.5 5.7 7.4l-.2-3.2c-1.9-.8-3.2-2.7-3.2-4.9C3.6 5.4 6 3 9 3s5.4 2.4 5.4 5.4c0 2.2-1.3 4-3.2 4.9l-.2 3.1c3.3-.9 5.7-3.8 5.7-7.4 0-4.2-3.5-7.7-7.7-7.7z" />
        <path fill="#FFF" d="M9 0C4 0 0 4 0 9c0 4.3 3.1 8 7.2 8.8l.1 1.3c.1.8.7 1.5 1.4 1.5h.7c.7 0 1.3-.7 1.4-1.5l.1-1.3c4-.8 7.1-4.5 7.1-8.8 0-5-4-9-9-9zM4.9 8.4c0-2.2 1.8-4.1 4.1-4.1s4.1 1.8 4.1 4.1c0 1.4-.7 2.6-1.7 3.3 0-.8-.8-1.4-1.8-1.4H8.5c-1 0-1.8.6-1.8 1.4-1.1-.7-1.8-2-1.8-3.3zm6.1 8l.2-3.1c1.9-.8 3.2-2.7 3.2-4.9C14.4 5.4 12 3 9 3S3.6 5.4 3.6 8.4c0 2.2 1.3 4 3.2 4.9l.2 3.1c-3.2-.9-5.7-3.8-5.7-7.4 0-4.2 3.4-7.7 7.7-7.7s7.7 3.4 7.7 7.7c0 3.6-2.5 6.5-5.7 7.4z" />
        <circle fill="#FFF" cx="9" cy="8" r="2.1" />
      </symbol>
      <symbol viewbox="0 0 125.1 125.1" id="slack-icon">
        <g fill="#FFF">
          <path d="M51.444 57.35l16.689-5.59 5.399 16.119-16.689 5.59z" />
          <path d="M51.444 57.35l16.689-5.59 5.399 16.119-16.689 5.59z" />
          <path d="M119.8 45.3c-12.9-43-31.5-53-74.5-40.1s-53 31.5-40.1 74.5 31.5 53 74.5 40.1 53-31.5 40.1-74.5zM98.1 73.2L90 75.9l2.8 8.4c1.1 3.4-.7 7.1-4.1 8.2-.7.2-1.5.4-2.2.3-2.6-.1-5.1-1.8-6-4.4L77.7 80 61 85.6l2.8 8.4c1.1 3.4-.7 7.1-4.1 8.2-.7.2-1.5.4-2.2.3-2.6-.1-5.1-1.8-6-4.4l-2.8-8.4-8.1 2.7c-.7.2-1.5.4-2.2.3-2.6-.1-5.1-1.8-6-4.4-1.1-3.4.7-7.1 4.1-8.2l8.1-2.7-5.4-16.1-8.1 2.7c-.7.2-1.5.4-2.2.3-2.6-.1-5.1-1.8-6-4.4-1.1-3.4.7-7.1 4.1-8.2l8.1-2.7-2.8-8.4c-1.1-3.4.7-7.1 4.1-8.2s7.1.7 8.2 4.1l2.8 8.4 16.7-5.6-2.8-8.4c-1.1-3.4.7-7.1 4.1-8.2 3.4-1.1 7.1.7 8.2 4.1l2.8 8.4 8.1-2.7c3.4-1.1 7.1.7 8.2 4.1 1.1 3.4-.7 7.1-4.1 8.2l-8.1 2.7 5.4 16.1 8.1-2.7c3.4-1.1 7.1.7 8.2 4.1 1.1 3.4-.7 7.1-4.1 8.2z" />
        </g>
      </symbol>
      <symbol viewbox="0 0 17 17.3" id="slideshare-icon">
        <g fill="#FFF">
          <path d="M16.3 8.2c-.1 0-.1.1-.2.1V1.7c0-.9-.7-1.7-1.6-1.7H2.4C1.6 0 .9.8.9 1.7v6.7c-.1 0-.1-.1-.2-.1-.6-.4-.9.1-.6.5.6.8 1.8 1.7 3.6 2.4-1.9 6.5 4.6 7.5 4.5 4.2v-3.3c.2 0 .3.1.5.1v3.2c-.1 3.3 6.5 2.3 4.5-4.2 1.8-.7 3-1.7 3.6-2.4.4-.4.1-.9-.5-.6zM9.9 9.9c-.8 0-1.1.3-1.1.8-.2-.1-.4-.3-.6-.5l-.1-.1c-.2-.1-.5-.2-1-.2-1.1 0-3 .2-5.3-1V2.4c0-1.2.3-1.5 1.4-1.5h10.7c1 0 1.4.4 1.4 1.5v6.4C13 10.2 11 9.9 9.9 9.9z" />
          <path d="M11 5.2c-1.1 0-2 .9-2 2s.9 2 2.1 2c1.2 0 2.1-.9 2.1-2s-1-2-2.2-2z" />
          <ellipse cx="6.2" cy="7.2" rx="2.1" ry="2" />
        </g>
      </symbol>
      <symbol viewbox="0 0 18 18" id="solid-orange-email-icon">
        <g fill="#F7751F">
          <path d="M0 5.8v8.3c0 .5.4.9.9.9h16.2c.5 0 .9-.5.9-.9V5.9l-8.9 4.9-9.1-5z" />
          <path d="M17.1 2.9H.9c-.5 0-.9.3-.9.8v.8l9.1 4.9L18 4.6v-.9c0-.5-.4-.8-.9-.8z" />
        </g>
      </symbol>
      <symbol viewbox="0 0 20 20" id="twitter-icon">
        <path fill="#FFF" d="M20 5.7c-.7.3-1.5.5-2.4.6.9-.5 1.5-1.3 1.8-2.3-.8.5-1.7.8-2.6 1-.7-.8-1.8-1.3-3-1.3-2.3 0-4.1 1.8-4.1 4.1 0 .3 0 .6.1.9C6.4 8.6 3.4 7 1.4 4.5 1 5.1.8 5.8.8 6.6c0 1.4.8 2.6 1.9 3.4-.7 0-1.3-.2-1.9-.5v.1c0 2 1.4 3.6 3.3 4-.3.1-.7.1-1.1.1-.3 0-.5 0-.8-.1.5 1.6 2 2.8 3.8 2.8-1.4 1.1-3.2 1.8-5.1 1.8-.3 0-.7 0-1-.1C1.8 19.3 4 20 6.3 20 13.8 20 18 13.7 18 8.3v-.5c.8-.6 1.4-1.3 2-2.1z" />
      </symbol>
      <symbol viewbox="0 0 20 20" id="youtube-icon">
        <path fill="#FFF" d="M19.8 9s-.2-1.4-.8-2c-.8-.8-1.6-.8-2-.8-2.8-.2-7-.2-7-.2s-4.2 0-7 .2c-.4 0-1.2 0-2 .8-.6.6-.8 2-.8 2S0 10.6 0 12.2v1.5c0 1.6.2 3.3.2 3.3s.2 1.4.8 2c.8.8 1.8.8 2.2.9 1.6.1 6.8.1 6.8.1s4.2 0 7-.2c.4 0 1.2-.1 2-.8.6-.6.8-2 .8-2s.2-1.6.2-3.2v-1.5c0-1.7-.2-3.3-.2-3.3zM7.9 15.6V10l5.4 2.8-5.4 2.8z" />
      </symbol>
    </svg>

    <div class="body-container-wrapper"><!-- Primary Site International Header -->







      <!-- absolute https://www.hubspot.com -->
      <!-- isPreview false -->


























      <!--?xml version="1.0" encoding="utf-8"?--> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none">
        <symbol viewbox="0 0 25 25" id="crm" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <path id="ba" d="M0 0h25v25H0z" />
          </defs>
          <g fill="none" fill-rule="evenodd">
            <path d="M16.827 12.5a4.327 4.327 0 10-8.653 0 4.327 4.327 0 008.653 0" fill="#FF7A59" />
            <g>
              <mask id="bb" fill="#fff">
                <use xlink:href="#ba" />
              </mask>
              <path d="M12.5 21.048A8.548 8.548 0 013.952 12.5a8.548 8.548 0 1117.096 0 8.548 8.548 0 01-8.548 8.548M12.5 0C5.597 0 0 5.596 0 12.5 0 19.403 5.597 25 12.5 25S25 19.403 25 12.5C25 5.596 19.403 0 12.5 0" fill="#2E475D" />
            </g>
          </g>
        </symbol>
        <symbol viewbox="0 0 25 25" id="marketing" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <path id="ca" d="M0 0h24.777v25H0z" />
            <path id="cc" d="M.389 0h12.33v16.36H.39z" />
          </defs>
          <g fill="none" fill-rule="evenodd">
            <g>
              <mask id="cb" fill="#fff">
                <use xlink:href="#ca" />
              </mask>
              <path d="M20.393 15.763c-1.32 3.19-4.51 5.413-8.207 5.28-4.246-.153-7.843-3.563-8.202-7.797a8.544 8.544 0 016.363-9.01.882.882 0 00.205-.08l3.939-2.171c.848-.47.602-1.744-.36-1.875a12.169 12.169 0 00-3.1-.021C4.866.835.056 6.177 0 12.387-.061 19.343 5.559 25 12.5 25c6.084 0 11.142-4.348 12.258-10.106.164-.844-.751-1.49-1.493-1.055l-2.46 1.44a.993.993 0 00-.412.484" fill="#2E475D" />
            </g>
            <g transform="translate(12)">
              <mask id="cd" fill="#fff">
                <use xlink:href="#cc" />
              </mask>
              <path d="M11.963 9.291l-1.7-.508L12.696.636c.127-.424-.309-.786-.69-.574L1.06 6.158c-.382.213-.328.787.085.91l1.701.51-2.436 8.146c-.127.424.31.786.691.573l10.946-6.095c.382-.213.328-.787-.085-.91" fill="#FF7A59" />
            </g>
          </g>
        </symbol>
        <symbol viewbox="0 0 25 29" id="sales" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <path id="da" d="M0 .981h25V17.89H0z" />
            <path id="dc" d="M.043.487h17.055V17H.043z" />
          </defs>
          <g fill="none" fill-rule="evenodd">
            <g transform="translate(0 -.981)">
              <mask id="db" fill="#fff">
                <use xlink:href="#da" />
              </mask>
              <path d="M4.09 14.976c-.276-1.514-.165-3.161.604-4.89 1.222-2.743 3.802-4.748 6.786-5.093a8.55 8.55 0 019.569 8.489c0 .574-.164 1.433-.301 2.05a.993.993 0 00.493 1.093c.466.249 1.093.619 1.62 1.044.533.43 1.353.203 1.56-.451.44-1.386.647-2.874.56-4.426C24.628 6.38 19.25 1.15 12.83.986 5.776.805-.001 6.469-.001 13.482c0 1.179.169 2.316.478 3.395.222.78 1.206.999 1.736.387.429-.493.94-.995 1.445-1.291.34-.2.502-.608.432-.997" fill="#2E475D" />
            </g>
            <g transform="translate(4 12.019)">
              <mask id="dd" fill="#fff">
                <use xlink:href="#dc" />
              </mask>
              <path d="M16.282 6.287l-4.652-.876-1.917-4.329a.988.988 0 00-.915-.595.986.986 0 00-.877.521L5.65 5.162l-4.71.485a1 1 0 00-.624 1.681l3.249 3.443-.994 4.628a1.003 1.003 0 00.977 1.213c.14 0 .287-.03.429-.098l4.279-2.027 4.094 2.375a.988.988 0 00.5.138c.568 0 1.077-.495.994-1.13l-.605-4.695 3.524-3.16a1 1 0 00-.482-1.728" fill="#FF7A59" />
            </g>
          </g>
        </symbol>
        <symbol viewbox="0 0 31 25" id="service" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <path id="ea" d="M.494.041h23.403V25H.494z" />
          </defs>
          <g fill="none" fill-rule="evenodd">
            <g transform="translate(7 -.04)">
              <mask id="eb" fill="#fff">
                <use xlink:href="#ea" />
              </mask>
              <path d="M12.383.042a.492.492 0 00-.467.713 8.27 8.27 0 01.861 2.956c.02.218.174.39.388.435a8.546 8.546 0 016.68 9.688c-.543 3.59-3.422 6.51-7.005 7.097a8.539 8.539 0 01-8.53-3.665.525.525 0 00-.731-.158c-.597.403-1.403.93-2.555.847-.401-.03-.661.407-.462.756 2.194 3.823 6.341 6.38 11.087 6.287 6.511-.128 11.964-5.453 12.238-11.962C24.17 6.224 19 .559 12.383.042" fill="#2E475D" />
            </g>
            <path d="M14.836 1.286a4.342 4.342 0 011.38 2.055c.257.813.295 1.633.112 2.456a4.247 4.247 0 01-1.172 2.135L8.96 14.354a1.02 1.02 0 01-.74.322c-.278 0-.524-.108-.738-.322L1.285 7.965A4.472 4.472 0 01.113 5.797a4.682 4.682 0 01.113-2.456 4.33 4.33 0 011.38-2.055A4.074 4.074 0 013.566.354a4.338 4.338 0 012.152.161 4.552 4.552 0 011.862 1.188l.642.643.642-.643A4.562 4.562 0 0110.726.515a4.333 4.333 0 012.15-.16c.729.128 1.382.44 1.96.931" fill="#FF7A59" />
          </g>
        </symbol>
        <symbol viewbox="0 0 13 24" id="CaretRight" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.89 11.439c-.035-.09-.102-.167-.157-.25l-.097-.155c-.014-.022-.023-.048-.043-.068L2.588.466A1.502 1.502 0 00.413 2.535L9.434 12l-9.02 9.466a1.5 1.5 0 102.174 2.069l10.005-10.5c.02-.021.029-.046.043-.07.033-.05.064-.102.097-.153.055-.083.122-.16.158-.25.037-.091.044-.187.062-.282.018-.093.047-.185.047-.28 0-.094-.029-.186-.047-.28-.018-.094-.025-.191-.062-.281" fill="#7C98B6" fill-rule="evenodd" />
        </symbol>
        <symbol viewbox="0 0 585.44 165.95" id="HSLogo_color" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <style>
              .cls-1 {
                fill: none
              }

              .cls-2 {
                fill: #2e475d;
                clip-path: url(#clip-path)
              }

              .cls-3 {
                fill: #ff7a59;
                clip-path: url(#clip-path-2)
              }
            </style>
            <clippath transform="translate(0 0)">
              <rect class="cls-1" width="585.44" height="165.96" />
            </clippath>
            <clippath transform="translate(0 0)">
              <rect class="cls-1" x="376.04" width="156.14" height="163.62" />
            </clippath>
          </defs>
          <g id="Layer_2">
            <g class="cls-2">
              <polygon points="63.4 27.47 63.4 74.28 20.41 74.28 20.41 27.47 0 27.47 0 139.21 20.41 139.21 20.41 93.92 63.4 93.92 63.4 139.21 83.81 139.21 83.81 27.47 63.4 27.47" />
              <path d="M149.13,103.09a16.88,16.88,0,0,1-33.77,0V55.23H96v47.86a36.21,36.21,0,0,0,72.42,0V55.23H149.13Z" transform="translate(0 0)" />
              <path d="M292.57,60.16c0-9.81,6.49-12.92,13.6-12.92,5.73,0,13.3,4.36,18.25,9.65L337.1,41.95c-6.33-8.56-19.17-14.48-29.68-14.48-21,0-36.19,12.3-36.19,32.69,0,37.83,46.24,25.83,46.24,47,0,6.53-6.34,12.3-13.6,12.3-11.45,0-15.16-5.6-20.42-11.52l-14.07,14.63c9,11.05,20.1,16.66,33.4,16.66,19.95,0,36-12.45,36-31.91,0-42-46.24-28.95-46.24-47.16" transform="translate(0 0)" />
              <path d="M578.63,121.36c-11.44,0-14.69-4.95-14.69-12.53V75.28h17.78v-17H563.94V35.85l-19.63,8.81V113c0,17.48,12.06,26.29,28.6,26.29a39.62,39.62,0,0,0,7.74-.62l4.79-17.63c-2.16.15-4.64.3-6.81.3" transform="translate(0 0)" />
              <path d="M222.82,55.79c-9.59,0-16.28,2.78-22.75,9.13V28.14H180.68V96.31c0,25.52,18.45,43,39.18,43,23,0,43.23-17.79,43.23-41.75,0-23.66-18.62-41.76-40.27-41.76m-.12,64a22,22,0,1,1,22-22,22,22,0,0,1-22,22" transform="translate(0 0)" />
              <path d="M433.36,96.54c0-24-20.19-41.75-43.23-41.75-20.73,0-39.18,17.48-39.18,43V166h19.39V129.17c6.46,6.34,13.16,9.13,22.74,9.13,21.65,0,40.27-18.09,40.27-41.76M415,96.3a22,22,0,1,1-22-22,22,22,0,0,1,22,22" transform="translate(0 0)" />
            </g>
            <g class="cls-3">
              <path d="M496,53.85V34.37a15,15,0,0,0,8.65-13.52v-.45a15,15,0,0,0-15-15h-.45a15,15,0,0,0-15,15v.45a15,15,0,0,0,8.65,13.52V53.85a42.48,42.48,0,0,0-20.2,8.89L409.23,21.13a16.75,16.75,0,0,0,.6-4.21,16.9,16.9,0,1,0-16.92,16.87,16.72,16.72,0,0,0,8.32-2.26l52.61,40.93a42.61,42.61,0,0,0,.65,48l-16,16a13.74,13.74,0,0,0-4-.65,13.88,13.88,0,1,0,13.89,13.89,13.7,13.7,0,0,0-.65-4l15.83-15.83A42.68,42.68,0,1,0,496,53.85m-6.56,64.06A21.9,21.9,0,1,1,511.36,96a21.9,21.9,0,0,1-21.9,21.9" transform="translate(0 0)" />
            </g>
          </g>
        </symbol>
        <symbol viewbox="0 0 27 28" id="Sprocket" xmlns="http://www.w3.org/2000/svg">
          <path d="M19.614 20.177c-2.091 0-3.787-1.678-3.787-3.747 0-2.07 1.696-3.747 3.787-3.747 2.092 0 3.787 1.677 3.787 3.747s-1.695 3.747-3.787 3.747m1.134-10.961V5.882c.88-.411 1.495-1.291 1.495-2.313v-.077c0-1.41-1.166-2.563-2.59-2.563h-.078c-1.424 0-2.59 1.153-2.59 2.563v.077c0 1.022.616 1.902 1.495 2.313v3.334c-1.309.2-2.505.734-3.492 1.52L5.74 3.617c.061-.231.104-.47.105-.721C5.845 1.298 4.539.002 2.925 0 1.312-.002.002 1.29 0 2.888-.002 4.485 1.304 5.78 2.918 5.783c.526 0 1.013-.147 1.44-.388l9.097 7.005a7.22 7.22 0 00-1.227 4.03c0 1.56.498 3.004 1.34 4.19L10.8 23.36a2.389 2.389 0 00-.686-.11c-1.326 0-2.4 1.063-2.4 2.375S8.788 28 10.114 28c1.326 0 2.401-1.064 2.401-2.376a2.32 2.32 0 00-.111-.679l2.736-2.708a7.397 7.397 0 004.473 1.502c4.08 0 7.386-3.272 7.386-7.309 0-3.654-2.713-6.673-6.252-7.214" fill="#FF7A59" fill-rule="evenodd" />
        </symbol>
        <symbol id="hs-icon-globe" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 14.25 19" enable-background="new 0 0 14.25 19" xml:space="preserve">
          <path id="path-1_1_" fill="currentColor" d="M13.9225,5.2324c0.6133,2.2106,0.3595,4.5326-0.7147,6.5393
                  c-1.0749,2.0067-2.8439,3.4614-4.9806,4.0957c-0.5524,0.1641-1.1122,0.2664-1.672,0.3114v1.5345h2.9005
                  c0.344,0,0.622,0.2882,0.622,0.6434c0,0.3558-0.278,0.6434-0.622,0.6434H2.4107c-0.344,0-0.622-0.2876-0.622-0.6434
                  c0-0.3551,0.278-0.6434,0.622-0.6434h2.9005v-1.546c-1.1818-0.0901-2.3413-0.4285-3.4068-1.0391
                  c-0.3011-0.1718-0.4093-0.5636-0.2432-0.8743c0.1667-0.3108,0.5461-0.4233,0.8453-0.2516c1.6496,0.9458,3.5605,1.1671,5.3774,0.6286
                  c1.8176-0.5398,3.3222-1.7764,4.2354-3.4826c0.9131-1.7062,1.1296-3.6808,0.6077-5.5607c-0.5219-1.8806-1.718-3.4363-3.367-4.3814
                  C9.0596,1.0337,8.9507,0.6425,9.1168,0.3318c0.1667-0.3114,0.5455-0.4227,0.846-0.2516C11.9028,1.192,13.3092,3.0217,13.9225,5.2324
                  z M11.875,7.5208c0,3.2738-2.6635,5.9375-5.9372,5.9375S0,10.7947,0,7.5208s2.6642-5.9375,5.9378-5.9375S11.875,4.247,11.875,7.5208
                  z" />
        </symbol>
        <symbol viewbox="0 0 27 28" id="cms" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <path id="aa" d="M.5.18h14.318V13H.5z" />
          </defs>
          <g fill="none" fill-rule="evenodd">
            <g transform="translate(12 14.458)">
              <mask id="ab" fill="#fff">
                <use xlink:href="#aa" />
              </mask>
              <path d="M7.555 2.645L1.218.19A.613.613 0 00.5.794v9.102c0 .299.216.554.51.604l6.545 2.492a.66.66 0 00.208 0l6.545-2.492a.613.613 0 00.51-.604V.794A.613.613 0 0014.1.19L7.763 2.645a.605.605 0 01-.208 0" fill="#FF7A59" />
            </g>
            <path d="M9.318 20.425c-3.462-1.39-5.808-4.973-5.296-9.036.484-3.84 3.635-6.945 7.482-7.38a8.55 8.55 0 019.544 8.491c0 .306-.09.466.127.682.342.34 3.439-1.177 3.439-1.177a.514.514 0 00.329-.517C24.409 4.834 18.68-.352 11.806.02 5.459.362.27 5.624.01 11.976c-.24 5.871 3.576 10.877 8.87 12.477a.496.496 0 00.635-.482c-.006-.965-.013-2.712-.015-3.286a.28.28 0 00-.183-.26" fill="#2E475D" />
          </g>
        </symbol>
      </svg>









      <header id="hsg-nav-global" class="hsg-nav__wrapper  ">
        <div class="hsg-nav__product-nav-bar">
          <div id="hs-nav-v4" class="nav-width-flex placeholder-nav">
            <div class="hs-nav-section main-nav"></div>
          </div>
        </div>

        <a class="ga_nav_link hsg-nav-menu__skip-link" href="#hsg-main-content" ga_nav_type="header_nav" ga_nav_tree_text="Skip to content">
          Skip to content
        </a>
        <nav class="hsg-nav-bar hsg-nav-top-bar" aria-label="Utility Navigation">
          <div class="hsg-page-width-normal">
            <div class="hsg-nav__inner">

              <ul class="hsg-nav__group">

                <li class="hsg-nav__group-item hsg-nav__group-item--has-dropdown">
                  <div class="hsg-nav__link-wrapper">
                    <button aria-expanded="false" aria-controls="Language-submenu" class="hsg-nav__link">
                      <span class="hsg-nav__link-label hsg-nav__link-label--globe">
                        <svg class="hsg-nav__globe-icon" aria-hidden="true">
                          <use xlink:href="#hs-icon-globe" fill="currentColor" />
                        </svg>
                        English<span class="visually-hidden">: Select a language</span>

                      </span>
                    </button>
                  </div>
                  <ul id="Language-submenu" class="hsg-nav__dropdown-list">
                    <li class="hsg-nav__dropdown-item">
                      <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="ja" data-ga_nav_type="header_nav" data-ga_nav_tree_text="日本語">日本語</a>
                    </li>
                    <li class="hsg-nav__dropdown-item">
                      <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="de" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Deutsch">Deutsch</a>
                    </li>
                    <li class="hsg-nav__dropdown-item">
                      <a class="ga_nav_link hsg-nav__dropdown-country-link active " href="" aria-current="page" lang="en" data-ga_nav_type="header_nav" data-ga_nav_tree_text="English">English</a>
                    </li>
                    <li class="hsg-nav__dropdown-item">
                      <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="es" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Español">Español</a>
                    </li>
                    <li class="hsg-nav__dropdown-item">
                      <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="pt" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Português">Português</a>
                    </li>
                    <li class="hsg-nav__dropdown-item">
                      <a class="ga_nav_link hsg-nav__dropdown-country-link" href="fr" lang="fr" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Français">Français</a>
                    </li>
                  </ul>
                </li>



                <li class="hsg-nav__group-item hsg-nav__group-item--has-contrast-toggle">
                  <button class="a11y-contrast-toggle -small -icon-left">
                    High Contrast
                  </button>
                </li>







              </ul>

              <ul class="hsg-nav__group">
                <li class="hsg-nav__group-item hsg-nav__group-item--search">




                </li>




                <li class="hsg-nav__group-item">

                  <a class="hsg-nav__group-item--utility ga_nav_link" href="" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Customer Support">Customer Support</a>

                </li>


                <li class="hsg-nav__group-item hsg-nav__group-item--about hsg-nav__group-item--has-dropdown">
                  <div class="hsg-nav__link-wrapper">
                    <button aria-expanded="false" aria-controls="hsg-nav-about-submenu" class="hsg-nav__link">
                      <span class="hsg-nav__link-label">


                      </span>
                    </button>
                  </div>
                  <ul id="hsg-nav-about-submenu" class="hsg-nav__dropdown-list">































                    <li class="hsg-nav__dropdown-item">
                      <a class="ga_nav_link homepage-nav-about-desktop" href="/dast-about" data-ga_nav_type="header_nav" data-ga_nav_tree_text="About > About Us">About Us</a>
                    </li>












                  </ul>
                </li>

              </ul>
            </div>
          </div>
        </nav>

        <div data-fixed-element="placeholder">
          <nav class="hsg-nav-menu" data-fixed-element="target" aria-label="Primary Navigation">
            <div class="hsg-page-width-normal">
              <div class="hsg-nav__inner">
                <a style="color: rgb(1, 1, 49)" href="/" id="hsg-nav__logo" aria-label="DAST" class="ga_nav_link logo-utility-nav" data-ga_nav_type="header_nav" data-ga_nav_tree_text="dast ">
                  DAST TECH



                </a>

                <button id="hsg-nav__logo-caret">

                  <svg id="hsg-nav__logo-caret-img" aria-hidden="true">
                    <use xlink:href="#CaretRight" />
                  </svg>

                  <span id="hsg-nav__logo-caret-home">Home</span>

                </button>



                <div class="hsg-nav__burger-wrapper" style="background: rgb(46, 46, 87);color:white;">
                  <button class="hsg-nav__burger" aria-expanded="false" aria-controls="burger-submenu">
                    <span class="visually-hidden">Menu</span>
                    <span class="hsg-nav__burger-label" aria-hidden="true"></span>
                  </button>
                </div>

                <div id="burger-submenu" class="hsg-nav__groups-wrapper">
                  <ul class="hsg-nav__group hsg-nav__group--primary">

                    <li class="hsg-nav__group-item hsg-nav__group-item--order-1  hsg-nav__group-item--has-dropdown ">
                      <div class="hsg-nav__link-wrapper">

                        <button class="hsg-nav__link" aria-expanded="false" aria-controls="hsg-nav-submenu-1">
                          <span class="hsg-nav__link-label">
                            <a style="color: rgb(1, 1, 49)" id="product" href="#">PRODUCTS</a>

                          </span>
                        </button>

                      </div>

                      <!-- Software -->
                      <ul id="hsg-nav-submenu-1" class="hsg-nav__dropdown-list hsg-nav__dropdown-cards hsg-nav__dropdown-list--1-col hsg-nav__dropdown-variant-c">
                        <li class="hsg-nav__dropdown-list-title">
                          <h2 class="hsg-nav__dropdown-list-title-text">DAST</h2>
                        </li>
                        <li class="hsg-nav__dropdown-row hsg-nav__dropdown-row--links">
                          <div class="hsg-nav__dropdown-column">


                            <div class="hsg-nav__box-link-none">

                              <div class="hsg-nav__header-container">





                                <h3 class="hsg-nav__header">Empowering Web3 Adoption</h3>







                                <p class="hsg-nav__subheader" gtm="">
                                  DAST is a technology company that provides software development solutions, blockchain solutions and digital services to individuals, businesses and organisations.See Products
                                </p>
                              </div>
                            </div>











                          </div>
                        </li>
                        <li class="hsg-nav__dropdown-row">
                          <p class="hsg-nav__dropdown-row-description"></p>

                          <a href="https://app.dast.tech/" class="ga_nav_link hsg-nav__box-link nav-software-marketing" gtm="marketing" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Software > Marketing Hub">

                            <div class="hsg-nav__box-link-icon" aria-hidden="true">


                              <img width="200%" src="{{ asset('/images/IMG-20230529-WA0008 (1).jpg') }}" alt="My Image">
                            </div>

                            <div class="hsg-nav__header-container">
                              <h4 class="hsg-nav__header" gtm="marketing">
                                DASTdAPP
                              </h4>
                              <p class="hsg-nav__subheader" gtm="marketing">Trusted recovery technology for digital assets. <span class="hsg-nav__subheader-highlight"> Your family/next of
                                  kin will have access to your assets in case of unforseen
                                  circumstances.</span></p>
                            </div>

                          </a>

                          <a href="/dast-pay" class="ga_nav_link hsg-nav__box-link nav-software-sales" gtm="sales" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Software > Sales Hub">

                            <div class="hsg-nav__box-link-icon" aria-hidden="true">


                              <img width="80%" style="height: 100%;" src="{{ asset('/images/IMG-20230529-WA0009 (1).jpg') }}" alt="My Image">

                            </div>

                            <div class="hsg-nav__header-container">
                              <h4 class="hsg-nav__header" gtm="sales">
                                DASTPay
                              </h4>
                              <p class="hsg-nav__subheader" gtm="sales">Simplify Your Finances, Anytime, <span class="hsg-nav__subheader-highlight">Anywhere with Speed</span></p>
                            </div>

                          </a>

                          <a href="/dast-lab" class="ga_nav_link hsg-nav__box-link nav-software-service" gtm="service" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Software > Service Hub">

                            <div class="hsg-nav__box-link-icon" aria-hidden="true">


                              <img width="80%" style="height: 100%;" src="{{ asset('/images/IMG-20230529-WA0005.jpg') }}" alt="dast lab">


                            </div>

                            <div class="hsg-nav__header-container">
                              <h4 class="hsg-nav__header" gtm="service">
                                DAST Lab
                              </h4>
                              <p class="hsg-nav__subheader" gtm="service">Empowering Global Talents in Web3 and <span class="hsg-nav__subheader-highlight">AI Training & Technologies!</span></p>
                            </div>

                          </a>

                          <a href="/dast-chat" class="ga_nav_link hsg-nav__box-link nav-software-cms" gtm="cms" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Software > CMS Hub">

                            <div class="hsg-nav__box-link-icon" aria-hidden="true">


                              <img width="100%" style="height: 100%;" src="{{ asset('/images/IMG-20230529-WA0012.jpg') }}" alt="My Image">

                            </div>

                            <div class="hsg-nav__header-container">
                              <h4 class="hsg-nav__header" gtm="cms">
                                DASTGPT
                              </h4>
                              <p class="hsg-nav__subheader" gtm="cms">Your Gateway to Web3 and AI Technologies <span class="hsg-nav__subheader-highlight">Discover the limitless possibilities of web3 and AI with DASTGPT Bot.</span></p>
                            </div>

                          </a>


                        </li>

                      </ul>
























                    </li>

                    <li class="hsg-nav__group-item hsg-nav__group-item--order-2 ">
                      <div class="hsg-nav__link-wrapper">

                        <a style="color: rgb(1, 1, 49)" href="/dast-blog" class="ga_nav_link hsg-nav__link hsg-nav__link-active " data-ga_nav_type="header_nav" data-ga_nav_tree_text="Pricing">
                          <span class="hsg-nav__link-label">
                            DAST BLOG

                          </span>
                        </a>

                      </div>

                    </li>






                    <li class="hsg-nav__group-item hsg-nav__group-item--order-2 ">
                      <div class="hsg-nav__link-wrapper">

                        <a style="color: rgb(1, 1, 49)" href="/dast-about" class="ga_nav_link hsg-nav__link hsg-nav__link-active " data-ga_nav_type="header_nav" data-ga_nav_tree_text="Pricing">
                          <span class="hsg-nav__link-label">
                            ABOUT

                          </span>
                        </a>

                      </div>

                    </li>








                    <li class="hsg-nav__group-item hsg-nav__group-item--order-3  hsg-nav__group-item--has-dropdown ">
                      <a href="/dast-contact">
                        <div class="hsg-nav__link-wrapper">

                          <button class="hsg-nav__link" aria-expanded="false" aria-controls="hsg-nav-submenu-3">
                            <span class="hsg-nav__link-label" style="color: rgb(1, 1, 49)">
                              CONTACT

                            </span>
                          </button>

                        </div>





                    </li>


                    <li class="hsg-nav__group-item  hsg-nav__group-item--has-dropdown  hsg-nav__group-item--about-mobile">

                      <ul id="hsg-nav-about-submenu-mobile" class="hsg-nav__dropdown-list hsg-nav__dropdown-cards">








































                        <li class="">
                          <a href="" class="ga_nav_link hsg-nav__box-link  homepage-nav-contact-us " data-ga_nav_type="header_nav" data-ga_nav_tree_text="About > Contact Us">
                            <div class="hsg-nav__header">Contact Us</div>

                          </a>
                        </li>









                      </ul>

                    </li>
                  </ul>

                  <ul class="hsg-nav__group hsg-nav__group--cta" role="none">
                    <li class="hsg-nav__group-item hsg-nav__group-item--cta" role="none">



























































































                      <div class="header-nav__ctas ">

                        <a style="background:rgb(1, 1, 49);border:rgb(1, 1, 51);" class="cta--features cta--regular cta--primary ga_nav_link homepage-nav " href="/dast-armies" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Get a demo">
                          DAST ARMIES <span class="visually-hidden"></span>
                        </a>


                        <a style="background:rgb(246, 246, 247);border:rgb(1, 1, 51); color:rgb(1, 10, 44);" class="cta--features cta--regular cta--secondary ga_nav_link homepage-nav2" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Get started free" href="/dast-partners">
                          DAST PARTNERS <span class="visually-hidden">DAST PARTNERS</span>
                        </a>



                      </div>




                    </li>
                  </ul>

                  <ul class="hsg-nav__group hsg-nav__group--utility hsg-nav__group--has-contrast-toggle">
                    <li class="hsg-nav__group-item hsg-nav__group--lang">


                      <ul class="hsg-nav__group">

                        <li class="hsg-nav__group-item hsg-nav__group-item--has-dropdown">
                          <div class="hsg-nav__link-wrapper">
                            <button aria-expanded="false" aria-controls="Language-submenu-mobile" class="hsg-nav__link">
                              <span class="hsg-nav__link-label hsg-nav__link-label--globe">
                                <svg class="hsg-nav__globe-icon" aria-hidden="true">
                                  <use xlink:href="#hs-icon-globe" fill="currentColor" />
                                </svg>
                                English<span class="visually-hidden">: Select a language</span>

                              </span>
                            </button>
                          </div>
                          <ul id="Language-submenu-mobile" class="hsg-nav__dropdown-list">
                            <li class="hsg-nav__dropdown-item">
                              <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="ja" data-ga_nav_type="header_nav" data-ga_nav_tree_text="日本語">日本語</a>
                            </li>
                            <li class="hsg-nav__dropdown-item">
                              <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="de" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Deutsch">Deutsch</a>
                            </li>
                            <li class="hsg-nav__dropdown-item">
                              <a class="ga_nav_link hsg-nav__dropdown-country-link active " href="" aria-current="page" lang="en" data-ga_nav_type="header_nav" data-ga_nav_tree_text="English">English</a>
                            </li>
                            <li class="hsg-nav__dropdown-item">
                              <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="es" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Español">Español</a>
                            </li>
                            <li class="hsg-nav__dropdown-item">
                              <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="pt" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Português">Português</a>
                            </li>
                            <li class="hsg-nav__dropdown-item">
                              <a class="ga_nav_link hsg-nav__dropdown-country-link" href="" lang="fr" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Français">Français</a>
                            </li>
                          </ul>
                        </li>



                        <li class="hsg-nav__group-item hsg-nav__group-item--has-contrast-toggle">
                          <button class="a11y-contrast-toggle -small -icon-left">
                            High Contrast
                          </button>
                        </li>






                      </ul>

                    </li>
                    <li class="hsg-nav__group-item hsg-nav__group-item--login">




                      <a href="" data-logged-in-text="Go to my account" data-logged-in-href="" class="ga_nav_link" data-ga_nav_type="header_nav">Contact Us</a>

                    </li>
                    <li class="hsg-nav__group-item">

                      <a class="ga_nav_link hsg-nav__group-item--utility" href="" data-ga_nav_type="header_nav" data-ga_nav_tree_text="Customer Support">Customer Support</a>

                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
        <div id="hsg-main-content" tabindex="-1"></div>
      </header>


      <main class="py-4">
        @yield('content')
      </main>
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    <footer style="background-color: #060129;color:white;
    " class="text-gray-700  footer" id="usmf-footer">
      <div class="footer-main">
        <div class="footer-site-info">
          <a href="/">
            <h3 style="">DAST TECH</h3>
          </a>
          <p class="text-gray-700">Empowering Web3 Adoption, Global Payments and Digital Asset <br> Security Management. <br>DAST is a technology company that provides software development solutions, <br> blockchain solutions and digital services to individuals, businesses and organisations. </p>
          <ul class="footer-social">
            <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dRtGxc6y">
                <span class="sr-only">Facebook</span>
                <svg class="h-full w-16px" viewBox="0 0 512 512">
                  <title>Facebook</title>
                  <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                </svg>
              </a></li>
            <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dMZNbBvq">
                <span class="sr-only">Twitter</span>
                <svg class="h-full w-16px" viewBox="0 0 512 512">
                  <title>Twitter</title>
                  <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                </svg>
              </a></li>
            <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dbCgsr4d">
                <span class="sr-only">Linked In</span>
                <svg class="h-full w-16px" viewBox="0 0 448 512">
                  <title>LinkedIn</title>
                  <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                </svg>
              </a></li>
            <li class="mr-8px"><a target="_blank" class="block text-center text-white rounded-full w-32px h-32px hover:text-white pr-10px bg-magenta-700 hover:bg-purple-700" data-action="social-icons" href="https://lnkd.in/dRjwuC-f">
                <span class="sr-only">Instagram</span>
                <svg class="h-full w-16px" viewBox="0 0 448 512">
                  <title>Instagram</title>
                  <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                </svg>
              </a></li>

          </ul>

        </div>
        <div class="footer-lists">
          <div class="footer-list">
            <h2 class="uppercase whitespace-nowrap">About DAST</h2>
            <ul>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="about" href="/dast-about">About Us</a></li>

              <li><a class="text-gray-700 hover:text-gray-1100" data-action="about" href="/dast-contact">Contact</a></li>

            </ul>
          </div>
          <div class="footer-list">
            <h2 class="uppercase">Our Products</h2>
            <ul>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" href="https://app.dast.tech/">DASTdAPP</a></li>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" href="/dast-partners">DAST Partners</a></li>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" href="></a></li>DASTPAY
      <li><a class=" text-gray-700 hover:text-gray-1100" data-action="services" href="/dast-armies">DAST ARMY</a></li>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" target="_blank" href="/dast-lab">DAST LAB</a></li>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="services" href="/dast-chat">DAST GPT</a></li>
            </ul>
          </div>


          <div class="footer-list">
            <h2 class="uppercase">Our Partners</h2>
            <ul>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="tmf-affiliates" target="_blank" href="">v.vella</a></li>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="tmf-affiliates" target="_blank" <li><a class="text-gray-700 hover:text-gray-1100" data-action="tmf-affiliates" target="_blank" href="">KT</a></li>
              <li><a class="text-gray-700 hover:text-gray-1100" data-action="tmf-affiliates" target="_blank" href="">Blocklex</a></li>

            </ul>
          </div>
        </div>
      </div>
      <div class="bg-gray-100 legal-text p-24px">
      <ul class="m-0 text-left lg:text-center">
        <li class="block lg:inline">
          <a class="p-0 text-gray-700" data-action="legal" id="footer-tos" href="{{ asset('downloads/Terms of Use for DAST\'s Website.pdf') }}" title="Terms of Use" target="_blank">Terms of Use</a>
        </li>
        
        <li class="block border-gray-700 lg:inline border-0px lg:border-l-1px">
          <a class="p-0 text-gray-700" data-action="legal" id="footer-pp" href="{{ asset('downloads/Privacy Policy for DAST\'s Website (2).pdf') }}" target="_blank" title="Privacy Policy">Privacy Policy</a>
        </li>
        
      <li class="block border-gray-700 lg:inline border-0px lg:border-l-1px"><a class="p-0 text-gray-700" data-action="legal" id="footer-dp" href="" title="Disclosure Policy">Disclosure Policy</a> </li>
      <li class="block border-gray-700 lg:inline border-0px lg:border-l-1px"><a class="p-0 text-gray-700" data-action="legal" id="footer-ap" href="" title="Accessibility Policy">Accessibility Policy</a></li>
      <li class="block border-gray-700 lg:inline border-0px lg:border-l-1px"><a class="p-0 text-gray-700" data-action="legal" id="footer-tm" href="" title="Copyright, Trademark and Patent Information">Copyright, Trademark and Patent Information</a> </li>
      <li class="block border-gray-700 lg:inline border-0px lg:border-l-1px"><a class="p-0 text-gray-700" data-action="legal" id="footer-tc" href="" title="Terms and Conditions">Terms and Conditions</a> </li>
      <li class="block border-gray-700 lg:inline border-0px lg:border-l-1px"><a class="p-0 text-gray-700" data-action="legal" id="footer-ccpa" href="/" title="Do Not Sell My Personal Information.">Do&nbsp;Not&nbsp;Sell My Personal Information</a> </li>
      </ul>
      </div>
    </footer>
    <script src="https://www.hubspot.com/wt-assets/static-files/2.2.1/core-nav/scripts.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
    </div>


    <!-- htmlmin:ignore -->

    <!-- HubSpot performance collection script -->
    <script defer src="https://static.hsappstatic.net/content-cwv-embed/static-1.194/embed.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
    <script nonce="7urWKdsavOuOY1tEDAtGXQ==">
      var hsVars = hsVars || {};
      hsVars['language'] = 'en';
    </script>

    <script src="/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
    <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/66945685888/1683744497507/module_66945685888_WTM_-_Homepage_-_Branding_Rollout_Hero.min.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
    <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/32625700689/1683744498442/module_32625700689_WTM_-_Homepage_-_Products.min.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>
    <script defer src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/80992206946/1680686004240/module_80992206946_ctaContentBlock.min.js" nonce="7urWKdsavOuOY1tEDAtGXQ=="></script>


    <!-- Start of HubSpot Analytics Code -->
    <script type="text/javascript" nonce="7urWKdsavOuOY1tEDAtGXQ==">
      var _hsq = _hsq || [];
      _hsq.push(["setContentType", "landing-page"]);











      _hsq.push(["setCanonicalUrl", "https:\/\/www.hubspot.com"]);
      _hsq.push(["setPageId", "5787921598"]);
      _hsq.push(["setContentMetadata", {
        "contentPageId": 5787921598,
        "legacyPageId": "5787921598",
        "contentFolderId": null,
        "contentGroupId": null,
        "abTestId": 5787921594,
        "languageVariantId": 5787921598,
        "languageCode": "en",

      }]);
    </script>


    <!-- End of HubSpot Analytics Code -->


    <script src="https://www.hubspot.com/wt-assets/static-files/2.2.4/core-nav/scripts.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    </div>


    <!-- htmlmin:ignore -->

    <!-- HubSpot performance collection script -->
    <script defer src="https://static.hsappstatic.net/content-cwv-embed/static-1.240/embed.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    <script nonce="baWixzo/oG9eiCpfxkKMzQ==">
      var hsVars = hsVars || {};
      hsVars['language'] = 'en';
    </script>

    <script src="/hs/hsstatic/cos-i18n/static-1.53/bundles/project.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/66945685888/1684330975991/module_66945685888_WTM_-_Homepage_-_Branding_Rollout_Hero.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    <script src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/32625700689/1683744498442/module_32625700689_WTM_-_Homepage_-_Products.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    <script defer src="https://cdn2.hubspot.net/hub/53/hub_generated/module_assets/80992206946/1680686004240/module_80992206946_ctaContentBlock.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>


    <!-- Start of HubSpot Analytics Code -->
    <script type="text/javascript" nonce="baWixzo/oG9eiCpfxkKMzQ==">
      var _hsq = _hsq || [];
      _hsq.push(["setContentType", "landing-page"]);
      _hsq.push(["setCanonicalUrl", "https:\/\/www.hubspot.com"]);
      _hsq.push(["setPageId", "5787921598"]);
      _hsq.push(["setContentMetadata", {
        "contentPageId": 5787921598,
        "legacyPageId": "5787921598",
        "contentFolderId": null,
        "contentGroupId": null,
        "abTestId": 5787921594,
        "languageVariantId": 5787921598,
        "languageCode": "en",

      }]);
    </script>


    <!-- End of HubSpot Analytics Code -->


    <script type="text/javascript" nonce="baWixzo/oG9eiCpfxkKMzQ==">
      var hsVars = {
        render_id: "9bb45bac-4120-4f72-a963-2ab1ca8aaea2",
        ticks: 1684905453400,
        page_id: 5787921598,

        content_group_id: 0,
        portal_id: 53,
        app_hs_base_url: "https://app.hubspot.com",
        cp_hs_base_url: "https://cp.hubspot.com",
        language: "en",
        analytics_page_type: "landing-page",
        analytics_page_id: "5787921598",
        category_id: 1,
        folder_id: 0,
        is_hubspot_user: false
      }
    </script>


    <script defer src="/hs/hsstatic/HubspotToolsMenu/static-1.191/js/index.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>

    <!-- Begin Domain Settings Code -->



    <!-- htmlmin:ignore -->
    <script type="text/javascript" src="https://static.hsappstatic.net/affiliates-landing-embed/ex/referral.js" async nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>


    <!-- HREFLANG MACRO -->


    <!-- TODO compress / optimize GDPR script -->


    <!-- hubs_ params script -->


    <script type="text/javascript" src="https://www.hubspot.com/wt-assets/static-files/mktg-analytics/latest/bundle.min.js?1173" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>


    <script defer id="gtm" src="https://www.hubspot.com/wt-assets/static-files/compliance/index.js" data-pid="53" data-gtm-id="GTM-N5LT88" data-skip-default-banner="true" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    <script defer id="cookieBanner-53" src="https://js.hs-banner.com/v2/53/banner.js" data-wt-loaded="true" data-cookieconsent="ignore" data-hs-ignore="true" data-loader="hs-scriptloader" data-hsjs-portal="53" data-hsjs-env="prod" data-hsjs-hublet="na1" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    <script defer id="hs-script-loader" src="/hs/scriptloader/53.js?businessUnitId=0" data-wt-loaded="true" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>
    <script defer id="messaging-functions" src="//www.hubspot.com/wt-assets/static-files/2383/messaging-functions/scripts.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>

    <script src="//cdn-3.convertexperiments.com/js/10031559-1003891.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>

    <script nonce="baWixzo/oG9eiCpfxkKMzQ==">
      window.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('link[rel="preload"]').forEach(function(e) {
          e.setAttribute("rel", "stylesheet");
        });
      });
    </script>

    <script src="//cdn2.hubspot.net/hub/53/hub_generated/template_assets/27335426394/1682000831311/_Web_Team_Assets/Website/assets/js/scripts.min.js" nonce="baWixzo/oG9eiCpfxkKMzQ=="></script>

    

  </body>

</html>