<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Skai-Work Environment</title>
  <base href="">
  <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, viewport-fit=cover">

  <link rel="shortcut icon" href="{{ asset('root/hyp/assets/images/favicon.ico')}}">
  <link id="home-table-link" rel="stylesheet" href="{{ asset ('root/lan/assets/splash.css')}}">
  <link id="home-table-link" rel="stylesheet" href="{{ asset ('root/lan/assets/theme.css')}}">
  <meta property="og:image" content="{{ asset('root/hyp/assets/images/favicon.ico')}}">
  <link rel="stylesheet" href="{{ asset('root/lan/styles.59d6eeba35a3b740.css')}}">


  <style ng-app-id="primeng">
    @layer primeng {

      p-inputnumber,
      .p-inputnumber {
        display: inline-flex;
      }

      .p-inputnumber-button {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
      }

      .p-inputnumber-buttons-stacked .p-button.p-inputnumber-button .p-button-label,
      .p-inputnumber-buttons-horizontal .p-button.p-inputnumber-button .p-button-label {
        display: none;
      }

      .p-inputnumber-buttons-stacked .p-button.p-inputnumber-button-up {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        padding: 0;
      }

      .p-inputnumber-buttons-stacked .p-inputnumber-input {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .p-inputnumber-buttons-stacked .p-button.p-inputnumber-button-down {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;
        padding: 0;
      }

      .p-inputnumber-buttons-stacked .p-inputnumber-button-group {
        display: flex;
        flex-direction: column;
      }

      .p-inputnumber-buttons-stacked .p-inputnumber-button-group .p-button.p-inputnumber-button {
        flex: 1 1 auto;
      }

      .p-inputnumber-buttons-horizontal .p-button.p-inputnumber-button-up {
        order: 3;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }

      .p-inputnumber-buttons-horizontal .p-inputnumber-input {
        order: 2;
        border-radius: 0;
      }

      .p-inputnumber-buttons-horizontal .p-button.p-inputnumber-button-down {
        order: 1;
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .p-inputnumber-buttons-vertical {
        flex-direction: column;
      }

      .p-inputnumber-buttons-vertical .p-button.p-inputnumber-button-up {
        order: 1;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        width: 100%;
      }

      .p-inputnumber-buttons-vertical .p-inputnumber-input {
        order: 2;
        border-radius: 0;
        text-align: center;
      }

      .p-inputnumber-buttons-vertical .p-button.p-inputnumber-button-down {
        order: 3;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        width: 100%;
      }

      .p-inputnumber-input {
        flex: 1 1 auto;
      }

      .p-fluid p-inputnumber,
      .p-fluid .p-inputnumber {
        width: 100%;
      }

      .p-fluid .p-inputnumber .p-inputnumber-input {
        width: 1%;
      }

      .p-fluid .p-inputnumber-buttons-vertical .p-inputnumber-input {
        width: 100%;
      }

      .p-inputnumber-clear-icon {
        position: absolute;
        top: 50%;
        margin-top: -0.5rem;
        cursor: pointer;
      }

      .p-inputnumber-clearable {
        position: relative;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-tabmenu-nav-container {
        position: relative;
      }

      .p-tabmenu-scrollable .p-tabmenu-nav-container {
        overflow: hidden;
      }

      .p-tabmenu-nav-content {
        overflow-x: auto;
        overflow-y: hidden;
        scroll-behavior: smooth;
        scrollbar-width: none;
        overscroll-behavior: contain auto;
      }

      .p-tabmenu-nav-btn {
        position: absolute;
        top: 0;
        z-index: 2;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .p-tabmenu-nav-prev {
        left: 0;
      }

      .p-tabmenu-nav-next {
        right: 0;
      }

      .p-tabview-nav-content::-webkit-scrollbar {
        display: none;
      }

      .p-tabmenu-nav {
        display: flex;
        margin: 0;
        padding: 0;
        list-style-type: none;
        flex-wrap: nowrap;
      }

      .p-tabmenu-nav a {
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
        display: flex;
        align-items: center;
        position: relative;
        text-decoration: none;
        text-decoration: none;
        overflow: hidden;
      }

      .p-tabmenu-nav a:focus {
        z-index: 1;
      }

      .p-tabmenu-nav .p-menuitem-text {
        line-height: 1;
        white-space: nowrap;
      }

      .p-tabmenu-ink-bar {
        display: none;
        z-index: 1;
      }

      .p-tabmenu-nav-content::-webkit-scrollbar {
        display: none;
      }

      .p-tabmenuitem:not(.p-hidden) {
        display: flex;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-progressbar {
        position: relative;
        overflow: hidden;
      }

      .p-progressbar-determinate .p-progressbar-value {
        height: 100%;
        width: 0%;
        position: absolute;
        display: none;
        border: 0 none;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }

      .p-progressbar-determinate .p-progressbar-label {
        display: inline-flex;
      }

      .p-progressbar-determinate .p-progressbar-value-animate {
        transition: width 1s ease-in-out;
      }

      .p-progressbar-indeterminate .p-progressbar-value::before {
        content: '';
        position: absolute;
        background-color: inherit;
        top: 0;
        left: 0;
        bottom: 0;
        will-change: left, right;
        animation: p-progressbar-indeterminate-anim 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;
      }

      .p-progressbar-indeterminate .p-progressbar-value::after {
        content: '';
        position: absolute;
        background-color: inherit;
        top: 0;
        left: 0;
        bottom: 0;
        will-change: left, right;
        animation: p-progressbar-indeterminate-anim-short 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
        animation-delay: 1.15s;
      }
    }

    @keyframes p-progressbar-indeterminate-anim {
      0% {
        left: -35%;
        right: 100%;
      }

      60% {
        left: 100%;
        right: -90%;
      }

      100% {
        left: 100%;
        right: -90%;
      }
    }

    @keyframes p-progressbar-indeterminate-anim-short {
      0% {
        left: -200%;
        right: 100%;
      }

      60% {
        left: 107%;
        right: -8%;
      }

      100% {
        left: 107%;
        right: -8%;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-tree-container {
        margin: 0;
        padding: 0;
        list-style-type: none;
        overflow: auto;
      }

      .p-treenode-children {
        margin: 0;
        padding: 0;
        list-style-type: none;
      }

      .p-tree-wrapper {
        overflow: auto;
      }

      .p-treenode-selectable {
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
      }

      .p-tree-toggler {
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
        flex-shrink: 0;
      }

      .p-treenode-leaf>.p-treenode-content .p-tree-toggler {
        visibility: hidden;
      }

      .p-treenode-content {
        display: flex;
        align-items: center;
      }

      .p-tree-filter {
        width: 100%;
      }

      .p-tree-filter-container {
        position: relative;
        display: block;
        width: 100%;
      }

      .p-tree-filter-icon {
        position: absolute;
        top: 50%;
        margin-top: -0.5rem;
      }

      .p-tree-loading {
        position: relative;
        min-height: 4rem;
      }

      .p-tree .p-tree-loading-overlay {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
      }

      .p-tree-flex-scrollable {
        display: flex;
        flex: 1;
        height: 100%;
        flex-direction: column;
      }

      .p-tree-flex-scrollable .p-tree-wrapper {
        flex: 1;
      }

      .p-tree .p-treenode-droppoint {
        height: 4px;
        list-style-type: none;
      }

      .p-tree .p-treenode-droppoint-active {
        border: 0 none;
      }

      .p-tree-horizontal {
        width: auto;
        padding-left: 0;
        padding-right: 0;
        overflow: auto;
      }

      .p-tree.p-tree-horizontal table,
      .p-tree.p-tree-horizontal tr,
      .p-tree.p-tree-horizontal td {
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        vertical-align: middle;
      }

      .p-tree-horizontal .p-treenode-content {
        font-weight: normal;
        padding: 0.4em 1em 0.4em 0.2em;
        display: flex;
        align-items: center;
      }

      .p-tree-horizontal .p-treenode-parent .p-treenode-content {
        font-weight: normal;
        white-space: nowrap;
      }

      .p-tree.p-tree-horizontal .p-treenode {
        background: url('line.6fd2e298955ab301.gif') repeat-x scroll center center transparent;
        padding: 0.25rem 2.5rem;
      }

      .p-tree.p-tree-horizontal .p-treenode.p-treenode-leaf,
      .p-tree.p-tree-horizontal .p-treenode.p-treenode-collapsed {
        padding-right: 0;
      }

      .p-tree.p-tree-horizontal .p-treenode-children {
        padding: 0;
        margin: 0;
      }

      .p-tree.p-tree-horizontal .p-treenode-connector {
        width: 1px;
      }

      .p-tree.p-tree-horizontal .p-treenode-connector-table {
        height: 100%;
        width: 1px;
      }

      .p-tree.p-tree-horizontal .p-treenode-connector-line {
        background: url('line.6fd2e298955ab301.gif') repeat-y scroll 0 0 transparent;
        width: 1px;
      }

      .p-tree.p-tree-horizontal table {
        height: 0;
      }

      /* Virtual Scroll */
      .p-scroller .p-tree-container {
        overflow: visible;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-chip {
        display: inline-flex;
        align-items: center;
      }

      .p-chip-text {
        line-height: 1.5;
      }

      .p-chip-icon.pi {
        line-height: 1.5;
      }

      .pi-chip-remove-icon.pi {
        line-height: 1.5;
      }

      .pi-chip-remove-icon {
        cursor: pointer;
      }

      .p-chip img {
        border-radius: 50%;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-inputswitch {
        position: relative;
        display: inline-block;
        -webkit-user-select: none;
        user-select: none;
      }

      .p-inputswitch-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
      }

      .p-inputswitch-slider:before {
        position: absolute;
        content: '';
        top: 50%;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-button {
        margin: 0;
        display: inline-flex;
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
        align-items: center;
        vertical-align: bottom;
        text-align: center;
        overflow: hidden;
        position: relative;
      }

      .p-button-label {
        flex: 1 1 auto;
      }

      .p-button-icon-right {
        order: 1;
      }

      .p-button:disabled {
        cursor: default;
        pointer-events: none;
      }

      .p-button-icon-only {
        justify-content: center;
      }

      .p-button-icon-only:after {
        content: 'p';
        visibility: hidden;
        clip: rect(0 0 0 0);
        width: 0;
      }

      .p-button-vertical {
        flex-direction: column;
      }

      .p-button-icon-bottom {
        order: 2;
      }

      .p-buttonset .p-button {
        margin: 0;
      }

      .p-buttonset .p-button:not(:last-child) {
        border-right: 0 none;
      }

      .p-buttonset .p-button:not(:first-of-type):not(:last-of-type) {
        border-radius: 0;
      }

      .p-buttonset .p-button:first-of-type {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .p-buttonset .p-button:last-of-type {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }

      .p-buttonset .p-button:focus {
        position: relative;
        z-index: 1;
      }

      p-button[iconpos='right'] spinnericon {
        order: 1;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-slider {
        position: relative;
      }

      .p-slider .p-slider-handle {
        position: absolute;
        cursor: grab;
        touch-action: none;
        display: block;
      }

      .p-slider-range {
        position: absolute;
        display: block;
      }

      .p-slider-horizontal .p-slider-range {
        top: 0;
        left: 0;
        height: 100%;
      }

      .p-slider-horizontal .p-slider-handle {
        top: 50%;
      }

      .p-slider-vertical {
        height: 100px;
      }

      .p-slider-vertical .p-slider-handle {
        left: 50%;
      }

      .p-slider-vertical .p-slider-range {
        bottom: 0;
        left: 0;
        width: 100%;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-badge {
        display: inline-block;
        border-radius: 10px;
        text-align: center;
        padding: 0 0.5rem;
      }

      .p-overlay-badge {
        position: relative;
      }

      .p-overlay-badge .p-badge {
        position: absolute;
        top: 0;
        right: 0;
        transform: translate(50%, -50%);
        transform-origin: 100% 0;
        margin: 0;
      }

      .p-badge-dot {
        width: 0.5rem;
        min-width: 0.5rem;
        height: 0.5rem;
        border-radius: 50%;
        padding: 0;
      }

      .p-badge-no-gutter {
        padding: 0;
        border-radius: 50%;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-calendar {
        position: relative;
        display: inline-flex;
        max-width: 100%;
      }

      .p-calendar .p-inputtext {
        flex: 1 1 auto;
        width: 1%;
      }

      .p-calendar-w-btn .p-inputtext {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }

      .p-calendar-w-btn .p-datepicker-trigger {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
      }

      /* Fluid */
      .p-fluid .p-calendar {
        display: flex;
      }

      .p-fluid .p-calendar .p-inputtext {
        width: 1%;
      }

      /* Datepicker */
      .p-calendar .p-datepicker {
        min-width: 100%;
      }

      .p-datepicker {
        width: auto;
        position: absolute;
        top: 0;
        left: 0;
      }

      .p-datepicker-inline {
        display: inline-block;
        position: static;
        overflow-x: auto;
      }

      /* Header */
      .p-datepicker-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .p-datepicker-header .p-datepicker-title {
        margin: 0 auto;
      }

      .p-datepicker-prev,
      .p-datepicker-next {
        cursor: pointer;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        position: relative;
      }

      /* Multiple Month DatePicker */
      .p-datepicker-multiple-month .p-datepicker-group-container {
        display: flex;
      }

      .p-datepicker-multiple-month .p-datepicker-group-container .p-datepicker-group {
        flex: 1 1 auto;
      }

      /* Multiple Month DatePicker */
      .p-datepicker-multiple-month .p-datepicker-group-container {
        display: flex;
      }

      /* DatePicker Table */
      .p-datepicker table {
        width: 100%;
        border-collapse: collapse;
      }

      .p-datepicker td>span {
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        margin: 0 auto;
        overflow: hidden;
        position: relative;
      }

      /* Month Picker */
      .p-monthpicker-month {
        width: 33.3%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        overflow: hidden;
        position: relative;
      }

      /*  Button Bar */
      .p-datepicker-buttonbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      /* Time Picker */
      .p-timepicker {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .p-timepicker button {
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        overflow: hidden;
        position: relative;
      }

      .p-timepicker>div {
        display: flex;
        align-items: center;
        flex-direction: column;
      }

      /* Touch UI */
      .p-datepicker-touch-ui,
      .p-calendar .p-datepicker-touch-ui {
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 80vw;
        transform: translate(-50%, -50%);
      }

      /* Year Picker */
      .p-yearpicker-year {
        width: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        overflow: hidden;
        position: relative;
      }

      .p-calendar-clear-icon {
        position: absolute;
        top: 50%;
        margin-top: -0.5rem;
        cursor: pointer;
      }

      .p-calendar-clearable {
        position: relative;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-datatable {
        position: relative;
      }

      .p-datatable>.p-datatable-wrapper {
        overflow: auto;
      }

      .p-datatable-table {
        border-spacing: 0px;
        width: 100%;
      }

      .p-datatable .p-sortable-column {
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
      }

      .p-datatable .p-sortable-column .p-column-title,
      .p-datatable .p-sortable-column .p-sortable-column-icon,
      .p-datatable .p-sortable-column .p-sortable-column-badge {
        vertical-align: middle;
      }

      .p-datatable .p-sortable-column .p-icon-wrapper {
        display: inline;
      }

      .p-datatable .p-sortable-column .p-sortable-column-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      .p-datatable-hoverable-rows .p-selectable-row {
        cursor: pointer;
      }

      /* Scrollable */
      .p-datatable-scrollable>.p-datatable-wrapper {
        position: relative;
      }

      .p-datatable-scrollable-table>.p-datatable-thead {
        position: sticky;
        top: 0;
        z-index: 1;
      }

      .p-datatable-scrollable-table>.p-datatable-frozen-tbody {
        position: sticky;
        z-index: 1;
      }

      .p-datatable-scrollable-table>.p-datatable-tfoot {
        position: sticky;
        bottom: 0;
        z-index: 1;
      }

      .p-datatable-scrollable .p-frozen-column {
        position: sticky;
        background: inherit;
        z-index: 1;
      }

      .p-datatable-scrollable th.p-frozen-column {
        z-index: 1;
      }

      .p-datatable-flex-scrollable {
        display: flex;
        flex-direction: column;
        height: 100%;
      }

      .p-datatable-flex-scrollable>.p-datatable-wrapper {
        display: flex;
        flex-direction: column;
        flex: 1;
        height: 100%;
      }

      .p-datatable-scrollable-table>.p-datatable-tbody>.p-rowgroup-header {
        position: sticky;
        z-index: 1;
      }

      /* Resizable */
      .p-datatable-resizable-table>.p-datatable-thead>tr>th,
      .p-datatable-resizable-table>.p-datatable-tfoot>tr>td,
      .p-datatable-resizable-table>.p-datatable-tbody>tr>td {
        overflow: hidden;
        white-space: nowrap;
      }

      .p-datatable-resizable-table>.p-datatable-thead>tr>th.p-resizable-column:not(.p-frozen-column) {
        background-clip: padding-box;
        position: relative;
      }

      .p-datatable-resizable-table-fit>.p-datatable-thead>tr>th.p-resizable-column:last-child .p-column-resizer {
        display: none;
      }

      .p-datatable .p-column-resizer {
        display: block;
        position: absolute !important;
        top: 0;
        right: 0;
        margin: 0;
        width: 0.5rem;
        height: 100%;
        padding: 0px;
        cursor: col-resize;
        border: 1px solid transparent;
      }

      .p-datatable .p-column-resizer-helper {
        width: 1px;
        position: absolute;
        z-index: 10;
        display: none;
      }

      .p-datatable .p-row-editor-init,
      .p-datatable .p-row-editor-save,
      .p-datatable .p-row-editor-cancel {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
      }

      /* Expand */
      .p-datatable .p-row-toggler {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
      }

      /* Reorder */
      .p-datatable-reorder-indicator-up,
      .p-datatable-reorder-indicator-down {
        position: absolute;
      }

      .p-datatable-reorderablerow-handle {
        cursor: move;
      }

      [pReorderableColumn] {
        cursor: move;
      }

      /* Loader */
      .p-datatable .p-datatable-loading-overlay {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 2;
      }

      /* Filter */
      .p-column-filter-row {
        display: flex;
        align-items: center;
        width: 100%;
      }

      .p-column-filter-menu {
        display: inline-flex;
      }

      .p-column-filter-row p-columnfilterformelement {
        flex: 1 1 auto;
        width: 1%;
      }

      .p-column-filter-menu-button,
      .p-column-filter-clear-button {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        text-decoration: none;
        overflow: hidden;
        position: relative;
      }

      .p-column-filter-overlay {
        position: absolute;
        top: 0;
        left: 0;
      }

      .p-column-filter-row-items {
        margin: 0;
        padding: 0;
        list-style: none;
      }

      .p-column-filter-row-item {
        cursor: pointer;
      }

      .p-column-filter-add-button,
      .p-column-filter-remove-button {
        justify-content: center;
      }

      .p-column-filter-add-button .p-button-label,
      .p-column-filter-remove-button .p-button-label {
        flex-grow: 0;
      }

      .p-column-filter-buttonbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .p-column-filter-buttonbar .p-button {
        width: auto;
      }

      /* Responsive */
      .p-datatable-tbody>tr>td>.p-column-title {
        display: none;
      }

      /* Virtual Scroll */
      .p-datatable-scroller-spacer {
        display: flex;
      }

      .p-datatable .p-scroller .p-scroller-loading {
        transform: none !important;
        min-height: 0;
        position: sticky;
        top: 0;
        left: 0;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-dropdown {
        display: inline-flex;
        cursor: pointer;
        position: relative;
        -webkit-user-select: none;
        user-select: none;
      }

      .p-dropdown-clear-icon {
        position: absolute;
        top: 50%;
        margin-top: -0.5rem;
      }

      .p-dropdown-trigger {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }

      .p-dropdown-label {
        display: block;
        white-space: nowrap;
        overflow: hidden;
        flex: 1 1 auto;
        width: 1%;
        text-overflow: ellipsis;
        cursor: pointer;
      }

      .p-dropdown-label-empty {
        overflow: hidden;
        opacity: 0;
      }

      input.p-dropdown-label {
        cursor: default;
      }

      .p-dropdown .p-dropdown-panel {
        min-width: 100%;
      }

      .p-dropdown-panel {
        position: absolute;
        top: 0;
        left: 0;
      }

      .p-dropdown-items-wrapper {
        overflow: auto;
      }

      .p-dropdown-item {
        cursor: pointer;
        font-weight: normal;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
      }

      .p-dropdown-item-group {
        cursor: auto;
      }

      .p-dropdown-items {
        margin: 0;
        padding: 0;
        list-style-type: none;
      }

      .p-dropdown-filter {
        width: 100%;
      }

      .p-dropdown-filter-container {
        position: relative;
      }

      .p-dropdown-filter-icon {
        position: absolute;
        top: 50%;
        margin-top: -0.5rem;
      }

      .p-fluid .p-dropdown {
        display: flex;
      }

      .p-fluid .p-dropdown .p-dropdown-label {
        width: 1%;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-listbox-list-wrapper {
        overflow: auto;
      }

      .p-listbox-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
      }

      .p-listbox-item {
        cursor: pointer;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        -webkit-user-select: none;
        user-select: none;
      }

      .p-listbox-header {
        display: flex;
        align-items: center;
      }

      .p-listbox-filter-container {
        position: relative;
        flex: 1 1 auto;
      }

      .p-listbox-filter-icon {
        position: absolute;
        top: 50%;
        margin-top: -0.5rem;
      }

      .p-listbox-filter {
        width: 100%;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-checkbox {
        display: inline-flex;
        cursor: pointer;
        -webkit-user-select: none;
        user-select: none;
        vertical-align: bottom;
        position: relative;
      }

      .p-checkbox-disabled {
        cursor: default !important;
        pointer-events: none;
      }

      .p-checkbox-box {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      p-checkbox {
        display: inline-flex;
        vertical-align: bottom;
        align-items: center;
      }

      .p-checkbox-label {
        line-height: 1;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-overlay {
        position: absolute;
        top: 0;
        left: 0;
      }

      .p-overlay-modal {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }

      .p-overlay-content {
        transform-origin: inherit;
      }

      .p-overlay-modal>.p-overlay-content {
        z-index: 1;
        width: 90%;
      }

      /* Position */
      /* top */
      .p-overlay-top {
        align-items: flex-start;
      }

      .p-overlay-top-start {
        align-items: flex-start;
        justify-content: flex-start;
      }

      .p-overlay-top-end {
        align-items: flex-start;
        justify-content: flex-end;
      }

      /* bottom */
      .p-overlay-bottom {
        align-items: flex-end;
      }

      .p-overlay-bottom-start {
        align-items: flex-end;
        justify-content: flex-start;
      }

      .p-overlay-bottom-end {
        align-items: flex-end;
        justify-content: flex-end;
      }

      /* left */
      .p-overlay-left {
        justify-content: flex-start;
      }

      .p-overlay-left-start {
        justify-content: flex-start;
        align-items: flex-start;
      }

      .p-overlay-left-end {
        justify-content: flex-start;
        align-items: flex-end;
      }

      /* right */
      .p-overlay-right {
        justify-content: flex-end;
      }

      .p-overlay-right-start {
        justify-content: flex-end;
        align-items: flex-start;
      }

      .p-overlay-right-end {
        justify-content: flex-end;
        align-items: flex-end;
      }
    }
  </style>
  <style ng-app-id="primeng">
    @layer primeng {
      .p-paginator {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
      }

      .p-paginator-left-content {
        margin-right: auto;
      }

      .p-paginator-right-content {
        margin-left: auto;
      }

      .p-paginator-page,
      .p-paginator-next,
      .p-paginator-last,
      .p-paginator-first,
      .p-paginator-prev,
      .p-paginator-current {
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        -webkit-user-select: none;
        user-select: none;
        overflow: hidden;
        position: relative;
      }

      .p-paginator-element:focus {
        z-index: 1;
        position: relative;
      }
    }
  </style>
</head>

<body>
  <app-root ng-version="16.2.0" ng-server-context="ssr"><router-outlet></router-outlet>
    <landing class="ng-star-inserted">
      <div ng-reflect-ng-class="[object Object]" class="landing landing-light">
        <div class="landing-intro">
          <section class="landing-header px-5 lg:px-8" ng-reflect-ng-class="[object Object]">
            <div class="landing-header-container">
              <span>
                <a href="">
                  <img width="40" height="50" alt="PrimeNG" priority="" class="landing-header-logo"
                    src="{{ asset('root/hyp/assets/images/favicon.ico')}}">
                </a>
              </span>
              <div class="flex align-items-center">
                <nav class="scalein origin-top">

                </nav>
                <a href=""class="linkbox p-0 header-button mr-1 md:mr-2 flex align-items-center justify-content-center flex-shrink-0"><i
                    class="pi pi-home"></i>
                </a>
                <a href="" class="linkbox p-0 header-button mr-1 md:mr-2 flex align-items-center justify-content-center flex-shrink-0 mr-6"><i
                    class="pi pi-comments"></i>
                </a>
              </div>
            </div>
          </section>

          <section
            class="landing-hero flex align-items-center flex-column justify-content-center relative hero-animation"
            ng-reflect-ng-class="[object Object]">
            <div class="hero-inner z-2 relative">
              <div class="flex flex-column md:align-items-center md:flex-row">

                <div class="p-2 flex flex-row md:flex-column">
                  <a href="">
                    <div class="hero-box w-10rem h-10rem md:w-12rem md:h-12rem animation flex align-items-center justify-content-center">
                      <div class="flex flex-column align-items-center"><i class="pi pi-book" style="font-size: 30px;"></i>
                        <div class="name"><b>Terms & Conditions</b><span>know more about us</span></div>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="hero-box w-10rem h-10rem md:w-12rem md:h-12rem animation ml-4 md:ml-0 md:mt-4 flex align-items-center justify-content-center">
                      <div class="flex flex-column align-items-center"><i class="pi pi-palette" style="font-size: 30px;"></i>
                        <div class="name"><b>Documentations</b><span>Click to read</span></div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="p-2 flex flex-row md:flex-column">
                  <a href="">
                    <div
                      class="hero-box w-10rem h-10rem md:w-12rem md:h-12rem animation flex align-items-center justify-content-center">
                      <div class="flex flex-column align-items-center"><i class="pi pi-user" style="font-size: 30px;"></i>
                        <div class="name"><b>View Contract</b><span>Get the contract status</span></div>
                      </div>
                    </div>
                  </a>
                  <a href="{{ route('login')}}" id="come">
                    <div class="hero-box w-10rem h-10rem md:w-12rem md:h-12rem animation logo hidden md:flex my-4 align-items-center justify-content-center">
                      <div class="hero-box-inner text-center"><i class="pi pi-home" style="font-size: 30px;"></i>
                        <div class="name"><b class="font-bold">MAIN HOME</b><span>Login To IWork</span></div>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="hero-box w-10rem h-10rem md:w-12rem md:h-12rem animation flex ml-4 md:ml-0 align-items-center justify-content-center">
                      <div class="flex flex-column align-items-center"><i class="pi pi-clock" style="font-size: 30px;"></i>
                        <div class="name"><b>My Days</b><span>Check your days</span></div>
                      </div>
                    </div>
                  </a>
                </div>

                <div class="p-2 flex flex-row md:flex-column">
                  <a href="">
                    <div class="hero-box w-10rem h-10rem md:w-12rem md:h-12rem animation flex align-items-center justify-content-center">
                      <div class="flex flex-column align-items-center"><i class="pi pi-folder" style="font-size: 30px;"></i>
                        <div class="name"><b>Statement</b><span>Get Statements Ready</span></div>
                      </div>
                    </div>
                  </a>
                  <a href="">
                    <div class="hero-box w-10rem h-10rem md:w-12rem md:h-12rem animation flex ml-4 md:ml-0 md:mt-4 align-items-center justify-content-center">
                      <div class="flex flex-column align-items-center"><i class="pi pi-database" style="font-size: 30px;"></i>
                        <div class="name"><b>Financial Slot</b><span>Get financial status</span></div>
                      </div>
                    </div>
                  </a>
                </div>

              </div>
              <div class="hero-border-top hidden md:block"></div>
              <div class="hero-border-left hidden md:block"></div>
              <div class="hero-border-right hidden md:block"></div>
            </div>
            <section
              class="landing-getstarted flex flex-column md:flex-row align-items-center justify-content-center mt-8 z-1">
              <a class="linkbox active font-semibold py-3 px-4" ng-reflect-router-link="installation"
                href="installation"> Make a Move <i class="pi pi-arrow-right ml-3"></i>
              </a>
            </section>
          </section>

        </div>

        <section class="landing-footer pt-8 px-5 lg:px-8" style="margin-top: -120px;">
          <div class="landing-footer-container">
            <hr class="section-divider mt-2">
            <div class="flex flex-wrap justify-content-between py-6 gap-5">
              <a href="#">
                <img width="50" height="45" alt="primeng logo" priority="" src="{{ asset('root/hyp/assets/images/favicon.ico')}}">
              </a>
              <div class="flex align-items-center">
                <a href=""  class="linkbox block w-3rem h-3rem flex align-items-center justify-content-center mr-3">
                  <i class="pi pi-lock"></i>
                </a>
                <a href=""  class="linkbox block w-3rem h-3rem flex align-items-center justify-content-center">
                  <i class="pi pi-user"></i>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </landing><!--container-->
  </app-root>

</body>

</html>
