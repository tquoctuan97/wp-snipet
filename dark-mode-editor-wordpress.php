add_action('admin_head', 'dark-mode-editor-wp');

function dark-mode-editor-wp() {
  echo '<style>
   /**
   * WordPress
   * Dark Editor
   *
   * RapidDev
   * Copyright (c) 2020, RapidDev
   * https://www.rdev.cc/
   * License https://opensource.org/licenses/MIT
   */

  .theme-editor-php p,
  .theme-editor-php h1,
  .theme-editor-php h2,
  .theme-editor-php label,
  .theme-editor-php span,
  .plugin-editor-php p,
  .plugin-editor-php h1,
  .plugin-editor-php h2,
  .plugin-editor-php label,
  .plugin-editor-php span {
    color: #fff;
  }

  .theme-editor-php .notification-dialog,
  .plugin-editor-php .notification-dialog {
    background: #333 !important;
  }

  .theme-editor-php a,
  .plugin-editor-php a {
    color: #c3e88d;
  }

  .theme-editor-php #wpcontent,
  .plugin-editor-php #wpcontent {
    background-color: #292d3e !important;
  }

  .theme-editor-php .wrap #templateside span.notice,
  .plugin-editor-php .wrap #templateside span.notice {
    background-color: #32364a !important;
    border-color:  #32364a !important;
  }

  .theme-editor-php #screen-meta,
  .plugin-editor-php #screen-meta {
    border: 1px solid #3c415c;
  }
  .theme-editor-php #contextual-help-columns,
  .plugin-editor-php #contextual-help-columns {
    background-color: #292d3e !important;
  }

  .theme-editor-php .help-tab-content ul li,
  .plugin-editor-php .help-tab-content ul li {
    color: #dfdfdf !important;
  }

  .theme-editor-php .contextual-help-tabs .active,
  .plugin-editor-php .contextual-help-tabs .active{
    background-color: #292d3e !important;
    border: 1px solid #3c415c;
  }

  .theme-editor-php .contextual-help-tabs .active > a,
  .plugin-editor-php .contextual-help-tabs .active > a{
    color: #dfdfdf !important;
  }

  .theme-editor-php select,
  .plugin-editor-php select {
    color: #dfdfdf !important;
    background: #4e5579 !important;
    border-color: #3c415c;
  }

  .theme-editor-php #templateside li:not(.howto) a,
  .plugin-editor-php #templateside li:not(.howto) a,
  .theme-editor-php .highlight,
  .plugin-editor-php .highlight {
    color: #dfdfdf;
  }

  .theme-editor-php #templateside li:not(.howto) a.hover,
  .plugin-editor-php #templateside li:not(.howto) a.hover,
  .theme-editor-php .highlight.hover,
  .plugin-editor-php .highlight.hover {
    background-color: #32364a !important;
  }

  .theme-editor-php .folder-label.focus,
  .plugin-editor-php .folder-label.focus {
    color: #dfdfdf !important;
  }

  .theme-editor-php .folder-label.hover,
  .plugin-editor-php .folder-label.hover {
    background-color: #32364a !important;
  }

  .theme-editor-php .button-disabled,
  .theme-editor-php .button-secondary.disabled,
  .theme-editor-php .button-secondary:disabled,
  .theme-editor-php .button-secondary[disabled],
  .theme-editor-php .button.disabled,
  .theme-editor-php .button:disabled,
  .theme-editor-php .button[disabled],
  .theme-editor-php .button,
  .theme-editor-php .button-secondary,
  .plugin-editor-php .button-disabled,
  .plugin-editor-php .button-secondary.disabled,
  .plugin-editor-php .button-secondary:disabled,
  .plugin-editor-php .button-secondary[disabled],
  .plugin-editor-php .button.disabled,
  .plugin-editor-php .button:disabled,
  .plugin-editor-php .button[disabled],
  .plugin-editor-php .button,
  .plugin-editor-php .button-secondary {
    color: #dfdfdf !important;
    background: #4e5579 !important;
    border: 1px solid #3c415c !important;
    cursor: pointer;
  }

  .theme-editor-php .button.hover,
  .theme-editor-php .button:focus,
  .theme-editor-php .button:hover,
  .plugin-editor-php .button.hover,
  .plugin-editor-php .button:focus,
  .plugin-editor-php .button:hover {
    background: #578480 !important;
    color: #fff !important;
  }

  .theme-editor-php #templateside > ul,
  .plugin-editor-php #templateside > ul,
  .CodeMirror-gutters {
    background-color: #292d3e !important;
    border: 1px solid #3c415c;
  }

  #template .CodeMirror, #template textarea {
    border: 1px solid #3c415c !important;
  }

  .CodeMirror-vscrollbar::-webkit-scrollbar,
  .theme-editor-php #templateside > ul::-webkit-scrollbar,
  .plugin-editor-php #templateside > ul::-webkit-scrollbar {
    width: 1em;
  }

  .CodeMirror-vscrollbar::-webkit-scrollbar-track,
  .theme-editor-php #templateside > ul::-webkit-scrollbar-track,
  .plugin-editor-php #templateside > ul::-webkit-scrollbar-track {
    box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  }

  .CodeMirror-vscrollbar::-webkit-scrollbar-thumb,
  .theme-editor-php #templateside > ul::-webkit-scrollbar-thumb,
  .plugin-editor-php #templateside > ul::-webkit-scrollbar-thumb {
    background-color: #4e5579;
    outline: 1px solid #4e5579;
  }

  .theme-editor-php span.nonessential,
  .plugin-editor-php span.nonessential {
    color: #c3e88d !important;
  }

  .theme-editor-php .notice,
  .plugin-editor-php .notice {
    color: #dfdfdf !important;
    background-color: #4e5579 !important;
    border: 1px solid #4e5579;
    border-left-color: #ec994e;
    border-left-width: 6px;
  }

  .theme-editor-php .error,
  .plugin-editor-php .error {
    color: #dfdfdf !important;
    background-color: #4e5579 !important;
    border: 1px solid #4e5579;
    border-left-color: #dc3232;
    border-left-width: 6px;
  }

  .theme-editor-php #message,
  .plugin-editor-php #message {
    color: #dfdfdf !important;
    background-color: #4e5579 !important;
    border: 1px solid #4e5579;
  }

  .theme-editor-php #message.notice-info,
  .plugin-editor-php #message.notice-info {
    border-left-color: #00a0d2;
    border-left-width: 6px;
  }

  #template .CodeMirror,
  #template textarea {
    background-color: #292d3e !important;
  }

  .wrap .CodeMirror .CodeMirror-linenumber {
    color: #7584a8 !important;
  }

  .CodeMirror-activeline-background {
    background-color: #32364a !important;
  }

  /* Lines colors */
  .cm-s-default .cm-comment {
    color: #7584a8 !important;
  }
  .cm-s-default .cm-tag {
    color: #f06860 !important;
  }
  .cm-s-default .cm-def {
    color: #c792e7 !important;
  }
  .cm-invalidchar,
  .cm-s-default .cm-error,
  .cm-s-default .cm-type,
  .cm-s-default .cm-variable-3,
  .cm-s-default .cm-builtin {
    color: #9cb1e1 !important;
  }
  .cm-s-default .cm-meta, .cm-s-default .cm-qualifier {
      color: #ffcb6b;
  }
  .cm-s-default .cm-atom,
  .cm-s-default .cm-number {
    color: #f78c6b !important;
  }

  .cm-s-default .cm-property {
    color: #b2ccd6 !important;
  }
  .cm-s-default .cm-string {
      color: #c3e88d !important;
  }
  .cm-s-default .cm-keyword {
      color: #c792ea !important;
  }
  .cm-s-default .cm-variable-2 {
      color: #ff516a !important;
  }
  .cm-s-default .cm-variable {
      color: #82aaff !important;
  }
  .cm-s-default .cm-operator {
      color: #71ddff !important;
  }
  .cm-s-default .cm-attribute {
      color: #ffcb6b !important;
  }
  .wrap .CodeMirror .CodeMirror-matchingbracket {
      color: #c3e88d !important;
  }
  </style>';
}
