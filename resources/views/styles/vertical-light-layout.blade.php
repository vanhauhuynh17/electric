<style>
    /*------------------------------------------------------------------
 [Master Stylesheet]

  Project:	PolluxUI Admin
  Version:	1.0.0
-------------------------------------------------------------------*/
/*-------------------------------------------------------------------
  ===== Table of Contents =====

  * Bootstrap functions
  * Template variables
  * SCSS Compass Functions
  * Boostrap Main SCSS
  * Template mixins
    + Animation Mixins
    + Badge Mixins
    + Button Mixins
    + Miscellaneous Mixins
    + BlockQuote Mixins
    + Cards Mixins
    + Color Functions Mixins
    + Tooltips
    + popovers
  * Core Styles
    + Reset Styles
    + Fonts
    + Functions
    + Backgrounds
    + Sidebar
    + Navbar
    + Typography
    + Miscellaneous
    + Footer
    + Layouts
    + Utilities
    + Demo styles
  * Components
    + Accordions
    + Badges
    + Bootstrap Alerts
    + Boostrap Progress
    + Buttons
    + Breadcrumbs
    + Cards
    + Checkboxes and Radios
    + Dropdowns
    + Forms
    + Google maps
    + Icons
    + Loaders
    + Lists
    + Modals
    + Pagination
    + Popover
    + Portfolio
    + Preview
    + Tables
    + Tabs
    + Timeline
    + Todo List
    + Tooltips
    + User Profile
    + Pricing table
    + Settings Panel
  * Email
    + Mail Sidebar
    + Mail List Container
    + Message Content
  * Plugin Overrides
    + Ace Editor
    + Avgrund Popup
    + Bootstrap Tour
    + Chartist
    + CodeMirror
    + Colcade
    + Colorpicker
    + Context Menu
    + Data Tables
    + Datepicker
    + Dropify
    + Dropzone
    + Flot chart
    + Full Calendar
    + Google Charts
    + Icheck
    + Jquery File Upload
    + Js-grid
    + Jvectormap
    + Light Gallery
    + Listify
    + No-ui-slider
    + Owl-carousel
    + Progressbar-js
    + Pws-tabs
    + Quill Editor
    + Rating
    + Select2
    + Summernote Editor
    + SweetAlert
    + Switchery
    + Tags
    + TinyMCE Editor
    + Toast
    + Typeahead
    + Wysi Editor
    + X-editable
    + Wizard
  * Landing screens
    + Auth
  * Horizontal Menu
    + Horizontal
-------------------------------------------------------------------*/
/*-------------------------------------------------------------------*/
/* === Import Bootstrap functions and variables === */
/*-------------------------------------------------------------------*/
/* === Import template variables === */
/*-------------------------------------------------------------------*/
/* === SCSS Compass Functions === */
@-moz-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes flash {
  0% {
    opacity: 1;
  }
  25% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  75% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  50% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  60% {
    -webkit-transform: translateY(-15px);
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -o-transform: translateY(-15px);
    transform: translateY(-15px);
  }
  80% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  10% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  20% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  30% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  40% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  50% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  60% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  70% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  90% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-o-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-ms-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    -moz-transform: scale(0.9) rotate(-3deg);
    -ms-transform: scale(0.9) rotate(-3deg);
    -o-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg);
  }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    -moz-transform: scale(1.1) rotate(-3deg);
    -ms-transform: scale(1.1) rotate(-3deg);
    -o-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg);
  }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    -moz-transform: scale(1.1) rotate(3deg);
    -ms-transform: scale(1.1) rotate(3deg);
    -o-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg);
  }
  100% {
    -webkit-transform: scale(1) rotate(0);
    -moz-transform: scale(1) rotate(0);
    -ms-transform: scale(1) rotate(0);
    -o-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0);
  }
}

@-moz-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-webkit-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-o-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-ms-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    -moz-transform-origin: top center 50%;
    -ms-transform-origin: top center 50%;
    -o-transform-origin: top center 50%;
    transform-origin: top center 50%;
  }
  20% {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    transform: rotate(15deg);
  }
  40% {
    -webkit-transform: rotate(-10deg);
    -moz-transform: rotate(-10deg);
    -ms-transform: rotate(-10deg);
    -o-transform: rotate(-10deg);
    transform: rotate(-10deg);
  }
  60% {
    -webkit-transform: rotate(5deg);
    -moz-transform: rotate(5deg);
    -ms-transform: rotate(5deg);
    -o-transform: rotate(5deg);
    transform: rotate(5deg);
  }
  80% {
    -webkit-transform: rotate(-5deg);
    -moz-transform: rotate(-5deg);
    -ms-transform: rotate(-5deg);
    -o-transform: rotate(-5deg);
    transform: rotate(-5deg);
  }
  100% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
}

@-moz-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-o-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-ms-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    -moz-transform: translateX(-25%) rotate(-5deg);
    -ms-transform: translateX(-25%) rotate(-5deg);
    -o-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg);
  }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    -moz-transform: translateX(20%) rotate(3deg);
    -ms-transform: translateX(20%) rotate(3deg);
    -o-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg);
  }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    -moz-transform: translateX(-15%) rotate(-3deg);
    -ms-transform: translateX(-15%) rotate(-3deg);
    -o-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg);
  }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    -moz-transform: translateX(10%) rotate(2deg);
    -ms-transform: translateX(10%) rotate(2deg);
    -o-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg);
  }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    -moz-transform: translateX(-5%) rotate(-1deg);
    -ms-transform: translateX(-5%) rotate(-1deg);
    -o-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg);
  }
  100% {
    -webkit-transform: translateX(0%);
    -moz-transform: translateX(0%);
    -ms-transform: translateX(0%);
    -o-transform: translateX(0%);
    transform: translateX(0%);
  }
}

@-moz-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-webkit-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-o-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-ms-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    -moz-transform: skewX(9deg);
    -ms-transform: skewX(9deg);
    -o-transform: skewX(9deg);
    transform: skewX(9deg);
  }
  10% {
    -webkit-transform: skewX(-8deg);
    -moz-transform: skewX(-8deg);
    -ms-transform: skewX(-8deg);
    -o-transform: skewX(-8deg);
    transform: skewX(-8deg);
  }
  20% {
    -webkit-transform: skewX(7deg);
    -moz-transform: skewX(7deg);
    -ms-transform: skewX(7deg);
    -o-transform: skewX(7deg);
    transform: skewX(7deg);
  }
  30% {
    -webkit-transform: skewX(-6deg);
    -moz-transform: skewX(-6deg);
    -ms-transform: skewX(-6deg);
    -o-transform: skewX(-6deg);
    transform: skewX(-6deg);
  }
  40% {
    -webkit-transform: skewX(5deg);
    -moz-transform: skewX(5deg);
    -ms-transform: skewX(5deg);
    -o-transform: skewX(5deg);
    transform: skewX(5deg);
  }
  50% {
    -webkit-transform: skewX(-4deg);
    -moz-transform: skewX(-4deg);
    -ms-transform: skewX(-4deg);
    -o-transform: skewX(-4deg);
    transform: skewX(-4deg);
  }
  60% {
    -webkit-transform: skewX(3deg);
    -moz-transform: skewX(3deg);
    -ms-transform: skewX(3deg);
    -o-transform: skewX(3deg);
    transform: skewX(3deg);
  }
  70% {
    -webkit-transform: skewX(-2deg);
    -moz-transform: skewX(-2deg);
    -ms-transform: skewX(-2deg);
    -o-transform: skewX(-2deg);
    transform: skewX(-2deg);
  }
  80% {
    -webkit-transform: skewX(1deg);
    -moz-transform: skewX(1deg);
    -ms-transform: skewX(1deg);
    -o-transform: skewX(1deg);
    transform: skewX(1deg);
  }
  90% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
  100% {
    -webkit-transform: skewX(0deg);
    -moz-transform: skewX(0deg);
    -ms-transform: skewX(0deg);
    -o-transform: skewX(0deg);
    transform: skewX(0deg);
  }
}

@-moz-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-webkit-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-o-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-ms-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    -moz-transform: scale(0.95, 0.95);
    -ms-transform: scale(0.95, 0.95);
    -o-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    -moz-transform: scale(1.1, 1.1);
    -ms-transform: scale(1.1, 1.1);
    -o-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
}

@-moz-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-webkit-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-o-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-ms-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
}

@-moz-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-o-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-ms-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    -moz-transform: scale(0.3, 0.3);
    -ms-transform: scale(0.3, 0.3);
    -o-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3);
  }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    -moz-transform: scale(1.05, 1.05);
    -ms-transform: scale(1.05, 1.05);
    -o-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05);
  }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    -moz-transform: scale(0.9, 0.9);
    -ms-transform: scale(0.9, 0.9);
    -o-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9);
  }
  100% {
    -webkit-transform: scale(1, 1);
    -moz-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    -o-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}

@-moz-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    -ms-transform: translateY(30px);
    -o-transform: translateY(30px);
    transform: translateY(30px);
  }
  80% {
    -webkit-transform: translateY(-10px);
    -moz-transform: translateY(-10px);
    -ms-transform: translateY(-10px);
    -o-transform: translateY(-10px);
    transform: translateY(-10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -o-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  80% {
    -webkit-transform: translateY(10px);
    -moz-transform: translateY(10px);
    -ms-transform: translateY(10px);
    -o-transform: translateY(10px);
    transform: translateY(10px);
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    -moz-transform: translateX(-30px);
    -ms-transform: translateX(-30px);
    -o-transform: translateX(-30px);
    transform: translateX(-30px);
  }
  80% {
    -webkit-transform: translateX(10px);
    -moz-transform: translateX(10px);
    -ms-transform: translateX(10px);
    -o-transform: translateX(10px);
    transform: translateX(10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    -moz-transform: translateX(30px);
    -ms-transform: translateX(30px);
    -o-transform: translateX(30px);
    transform: translateX(30px);
  }
  80% {
    -webkit-transform: translateX(-10px);
    -moz-transform: translateX(-10px);
    -ms-transform: translateX(-10px);
    -o-transform: translateX(-10px);
    transform: translateX(-10px);
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-o-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-ms-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-o-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-ms-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0;
  }
}

@-moz-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-o-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-ms-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
  }
}

@-moz-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-o-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-ms-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
}

@-moz-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-o-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-ms-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@-moz-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    -moz-transform: translateY(20px);
    -ms-transform: translateY(20px);
    -o-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    -moz-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    -moz-transform: translateX(20px);
    -ms-transform: translateX(20px);
    -o-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    -moz-transform: translateX(-20px);
    -ms-transform: translateX(-20px);
    -o-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-webkit-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-o-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-ms-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    -moz-transform: translateY(2000px);
    -ms-transform: translateY(2000px);
    -o-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
  }
}

@-moz-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-o-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-ms-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    -moz-transform: translateY(-2000px);
    -ms-transform: translateY(-2000px);
    -o-transform: translateY(-2000px);
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
}

@-moz-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    -moz-transform: translateX(2000px);
    -ms-transform: translateX(2000px);
    -o-transform: translateX(2000px);
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-o-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-ms-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    -moz-transform: translateX(-2000px);
    -ms-transform: translateX(-2000px);
    -o-transform: translateX(-2000px);
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    -ms-transform: translateX(0);
    -o-transform: translateX(0);
    transform: translateX(0);
  }
}

@-moz-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-o-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-ms-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    -moz-transform: perspective(400px) rotateY(0);
    -ms-transform: perspective(400px) rotateY(0);
    -o-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    -ms-animation-timing-function: ease-out;
    -o-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -moz-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -ms-transform: perspective(400px) rotateY(360deg) scale(0.95);
    -o-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    -moz-transform: perspective(400px) scale(1);
    -ms-transform: perspective(400px) scale(1);
    -o-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    -ms-animation-timing-function: ease-in;
    -o-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
}

@-moz-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    -moz-transform: perspective(400px) rotateX(-10deg);
    -ms-transform: perspective(400px) rotateX(-10deg);
    -o-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    -moz-transform: perspective(400px) rotateX(10deg);
    -ms-transform: perspective(400px) rotateX(10deg);
    -o-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    -moz-transform: perspective(400px) rotateX(0deg);
    -ms-transform: perspective(400px) rotateX(0deg);
    -o-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    -moz-transform: perspective(400px) rotateX(90deg);
    -ms-transform: perspective(400px) rotateX(90deg);
    -o-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    -moz-transform: perspective(400px) rotateY(-10deg);
    -ms-transform: perspective(400px) rotateY(-10deg);
    -o-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg);
  }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    -moz-transform: perspective(400px) rotateY(10deg);
    -ms-transform: perspective(400px) rotateY(10deg);
    -o-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    -moz-transform: perspective(400px) rotateY(0deg);
    -ms-transform: perspective(400px) rotateY(0deg);
    -o-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    -moz-transform: perspective(400px) rotateY(90deg);
    -ms-transform: perspective(400px) rotateY(90deg);
    -o-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-o-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-ms-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    -moz-transform: translateX(-20%) skewX(30deg);
    -ms-transform: translateX(-20%) skewX(30deg);
    -o-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    -moz-transform: translateX(0%) skewX(-15deg);
    -ms-transform: translateX(0%) skewX(-15deg);
    -o-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
}

@-moz-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    -moz-transform: translateX(0%) skewX(0deg);
    -ms-transform: translateX(0%) skewX(0deg);
    -o-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    -moz-transform: translateX(100%) skewX(-30deg);
    -ms-transform: translateX(100%) skewX(-30deg);
    -o-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    -moz-transform: rotate(200deg);
    -ms-transform: rotate(200deg);
    -o-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-o-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-ms-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
}

@-moz-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    -moz-transform: rotate(-200deg);
    -ms-transform: rotate(-200deg);
    -o-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: center center 50%;
    -moz-transform-origin: center center 50%;
    -ms-transform-origin: center center 50%;
    -o-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: left bottom 50%;
    -moz-transform-origin: left bottom 50%;
    -ms-transform-origin: left bottom 50%;
    -o-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-o-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-ms-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0;
  }
  100% {
    -webkit-transform-origin: right bottom 50%;
    -moz-transform-origin: right bottom 50%;
    -ms-transform-origin: right bottom 50%;
    -o-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    opacity: 1;
  }
}

@-moz-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-o-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-ms-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    -moz-transform: rotate(80deg);
    -ms-transform: rotate(80deg);
    -o-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  40% {
    -webkit-transform: rotate(60deg);
    -moz-transform: rotate(60deg);
    -ms-transform: rotate(60deg);
    -o-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    -moz-transform: rotate(60deg) translateY(0);
    -ms-transform: rotate(60deg) translateY(0);
    -o-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    -moz-transform-origin: top left 50%;
    -ms-transform-origin: top left 50%;
    -o-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    -moz-animation-timing-function: ease-in-out;
    -ms-animation-timing-function: ease-in-out;
    -o-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
  }
  100% {
    -webkit-transform: translateY(700px);
    -moz-transform: translateY(700px);
    -ms-transform: translateY(700px);
    -o-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
  }
}

@-moz-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-webkit-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-o-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-ms-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
}

@-moz-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-webkit-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-o-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@-ms-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

@keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    -moz-transform: translateX(0px) rotate(0deg);
    -ms-transform: translateX(0px) rotate(0deg);
    -o-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg);
  }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    -moz-transform: translateX(-100%) rotate(-120deg);
    -ms-transform: translateX(-100%) rotate(-120deg);
    -o-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg);
  }
}

/*-------------------------------------------------------------------*/
/* === Boostrap Main SCSS === */
/*!
 * Bootstrap v4.5.3 (https://getbootstrap.com/)
 * Copyright 2011-2020 The Bootstrap Authors
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --blue: #5E50F9;
  --indigo: #6610f2;
  --purple: #6a008a;
  --pink: #E91E63;
  --red: #f96868;
  --orange: #f2a654;
  --yellow: #f6e84e;
  --green: #46c35f;
  --teal: #58d8a3;
  --cyan: #57c7d4;
  --white: #ffffff;
  --gray: #6c757d;
  --gray-dark: #0f1531;
  --blue: #5E50F9;
  --indigo: #6610f2;
  --purple: #6a008a;
  --pink: #E91E63;
  --red: #f96868;
  --orange: #f2a654;
  --yellow: #f6e84e;
  --green: #46c35f;
  --teal: #58d8a3;
  --cyan: #57c7d4;
  --white: #ffffff;
  --gray: #434a54;
  --gray-light: #aab2bd;
  --gray-lighter: #e8eff4;
  --gray-lightest: #e6e9ed;
  --black: #000000;
  --primary: #844fc1;
  --secondary: #6c7293;
  --success: #21bf06;
  --info: #3b86d1;
  --warning: #f39915;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #282f3a;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #001737;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([class]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  -ms-overflow-style: scrollbar;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 1.25rem 0.9375rem;
  padding-bottom: 1.25rem 0.9375rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

[role="button"] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014\00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-wrap: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl {
  width: 100%;
  padding-right: 0.6875rem;
  padding-left: 0.6875rem;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px;
  }
}

.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -0.6875rem;
  margin-left: -0.6875rem;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 0.6875rem;
  padding-left: 0.6875rem;
}

.col {
  flex-basis: 0;
  flex-grow: 1;
  max-width: 100%;
}

.row-cols-1 > * {
  flex: 0 0 100%;
  max-width: 100%;
}

.row-cols-2 > * {
  flex: 0 0 50%;
  max-width: 50%;
}

.row-cols-3 > * {
  flex: 0 0 33.33333%;
  max-width: 33.33333%;
}

.row-cols-4 > * {
  flex: 0 0 25%;
  max-width: 25%;
}

.row-cols-5 > * {
  flex: 0 0 20%;
  max-width: 20%;
}

.row-cols-6 > * {
  flex: 0 0 16.66667%;
  max-width: 16.66667%;
}

.col-auto {
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}

.col-1 {
  flex: 0 0 8.33333%;
  max-width: 8.33333%;
}

.col-2 {
  flex: 0 0 16.66667%;
  max-width: 16.66667%;
}

.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  flex: 0 0 33.33333%;
  max-width: 33.33333%;
}

.col-5 {
  flex: 0 0 41.66667%;
  max-width: 41.66667%;
}

.col-6 {
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  flex: 0 0 58.33333%;
  max-width: 58.33333%;
}

.col-8 {
  flex: 0 0 66.66667%;
  max-width: 66.66667%;
}

.col-9 {
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  flex: 0 0 83.33333%;
  max-width: 83.33333%;
}

.col-11 {
  flex: 0 0 91.66667%;
  max-width: 91.66667%;
}

.col-12 {
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  order: -1;
}

.order-last {
  order: 13;
}

.order-0 {
  order: 0;
}

.order-1 {
  order: 1;
}

.order-2 {
  order: 2;
}

.order-3 {
  order: 3;
}

.order-4 {
  order: 4;
}

.order-5 {
  order: 5;
}

.order-6 {
  order: 6;
}

.order-7 {
  order: 7;
}

.order-8 {
  order: 8;
}

.order-9 {
  order: 9;
}

.order-10 {
  order: 10;
}

.order-11 {
  order: 11;
}

.order-12 {
  order: 12;
}

.offset-1 {
  margin-left: 8.33333%;
}

.offset-2 {
  margin-left: 16.66667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333%;
}

.offset-5 {
  margin-left: 41.66667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333%;
}

.offset-8 {
  margin-left: 66.66667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333%;
}

.offset-11 {
  margin-left: 91.66667%;
}

@media (min-width: 576px) {
  .col-sm {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-sm-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-sm-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-sm-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .row-cols-sm-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-sm-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-sm-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-sm-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-sm-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-sm-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-sm-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-sm-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-sm-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-sm-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-sm-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    order: -1;
  }
  .order-sm-last {
    order: 13;
  }
  .order-sm-0 {
    order: 0;
  }
  .order-sm-1 {
    order: 1;
  }
  .order-sm-2 {
    order: 2;
  }
  .order-sm-3 {
    order: 3;
  }
  .order-sm-4 {
    order: 4;
  }
  .order-sm-5 {
    order: 5;
  }
  .order-sm-6 {
    order: 6;
  }
  .order-sm-7 {
    order: 7;
  }
  .order-sm-8 {
    order: 8;
  }
  .order-sm-9 {
    order: 9;
  }
  .order-sm-10 {
    order: 10;
  }
  .order-sm-11 {
    order: 11;
  }
  .order-sm-12 {
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333%;
  }
  .offset-sm-2 {
    margin-left: 16.66667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333%;
  }
  .offset-sm-5 {
    margin-left: 41.66667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333%;
  }
  .offset-sm-8 {
    margin-left: 66.66667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333%;
  }
  .offset-sm-11 {
    margin-left: 91.66667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-md-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-md-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-md-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .row-cols-md-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-md-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-md-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-md-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-md-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-md-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-md-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-md-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-md-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-md-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-md-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-md-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    order: -1;
  }
  .order-md-last {
    order: 13;
  }
  .order-md-0 {
    order: 0;
  }
  .order-md-1 {
    order: 1;
  }
  .order-md-2 {
    order: 2;
  }
  .order-md-3 {
    order: 3;
  }
  .order-md-4 {
    order: 4;
  }
  .order-md-5 {
    order: 5;
  }
  .order-md-6 {
    order: 6;
  }
  .order-md-7 {
    order: 7;
  }
  .order-md-8 {
    order: 8;
  }
  .order-md-9 {
    order: 9;
  }
  .order-md-10 {
    order: 10;
  }
  .order-md-11 {
    order: 11;
  }
  .order-md-12 {
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333%;
  }
  .offset-md-2 {
    margin-left: 16.66667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333%;
  }
  .offset-md-5 {
    margin-left: 41.66667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333%;
  }
  .offset-md-8 {
    margin-left: 66.66667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333%;
  }
  .offset-md-11 {
    margin-left: 91.66667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-lg-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-lg-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-lg-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .row-cols-lg-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-lg-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-lg-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-lg-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-lg-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-lg-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-lg-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-lg-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-lg-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    order: -1;
  }
  .order-lg-last {
    order: 13;
  }
  .order-lg-0 {
    order: 0;
  }
  .order-lg-1 {
    order: 1;
  }
  .order-lg-2 {
    order: 2;
  }
  .order-lg-3 {
    order: 3;
  }
  .order-lg-4 {
    order: 4;
  }
  .order-lg-5 {
    order: 5;
  }
  .order-lg-6 {
    order: 6;
  }
  .order-lg-7 {
    order: 7;
  }
  .order-lg-8 {
    order: 8;
  }
  .order-lg-9 {
    order: 9;
  }
  .order-lg-10 {
    order: 10;
  }
  .order-lg-11 {
    order: 11;
  }
  .order-lg-12 {
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333%;
  }
  .offset-lg-2 {
    margin-left: 16.66667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333%;
  }
  .offset-lg-5 {
    margin-left: 41.66667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333%;
  }
  .offset-lg-8 {
    margin-left: 66.66667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333%;
  }
  .offset-lg-11 {
    margin-left: 91.66667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
  }
  .row-cols-xl-1 > * {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .row-cols-xl-2 > * {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .row-cols-xl-3 > * {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .row-cols-xl-4 > * {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .row-cols-xl-5 > * {
    flex: 0 0 20%;
    max-width: 20%;
  }
  .row-cols-xl-6 > * {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xl-1 {
    flex: 0 0 8.33333%;
    max-width: 8.33333%;
  }
  .col-xl-2 {
    flex: 0 0 16.66667%;
    max-width: 16.66667%;
  }
  .col-xl-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
  }
  .col-xl-5 {
    flex: 0 0 41.66667%;
    max-width: 41.66667%;
  }
  .col-xl-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 58.33333%;
    max-width: 58.33333%;
  }
  .col-xl-8 {
    flex: 0 0 66.66667%;
    max-width: 66.66667%;
  }
  .col-xl-9 {
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 83.33333%;
    max-width: 83.33333%;
  }
  .col-xl-11 {
    flex: 0 0 91.66667%;
    max-width: 91.66667%;
  }
  .col-xl-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    order: -1;
  }
  .order-xl-last {
    order: 13;
  }
  .order-xl-0 {
    order: 0;
  }
  .order-xl-1 {
    order: 1;
  }
  .order-xl-2 {
    order: 2;
  }
  .order-xl-3 {
    order: 3;
  }
  .order-xl-4 {
    order: 4;
  }
  .order-xl-5 {
    order: 5;
  }
  .order-xl-6 {
    order: 6;
  }
  .order-xl-7 {
    order: 7;
  }
  .order-xl-8 {
    order: 8;
  }
  .order-xl-9 {
    order: 9;
  }
  .order-xl-10 {
    order: 10;
  }
  .order-xl-11 {
    order: 11;
  }
  .order-xl-12 {
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333%;
  }
  .offset-xl-2 {
    margin-left: 16.66667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333%;
  }
  .offset-xl-5 {
    margin-left: 41.66667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333%;
  }
  .offset-xl-8 {
    margin-left: 66.66667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333%;
  }
  .offset-xl-11 {
    margin-left: 91.66667%;
  }
}

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #001737;
}

.table th,
.table td {
  padding: 1.25rem 0.9375rem;
  vertical-align: top;
  border-top: 1px solid #f3f3f3;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #f3f3f3;
}

.table tbody + tbody {
  border-top: 2px solid #f3f3f3;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #f3f3f3;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #f3f3f3;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #f4f5fa;
}

.table-hover tbody tr:hover {
  color: #212529;
  background-color: #eaeaf1;
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #ddceee;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #bfa3df;
}

.table-hover .table-primary:hover {
  background-color: #d0bbe7;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #d0bbe7;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8e1;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b3b6c7;
}

.table-hover .table-secondary:hover {
  background-color: #c7cad6;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c7cad6;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c1edb9;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #8cde7e;
}

.table-hover .table-success:hover {
  background-color: #afe8a5;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #afe8a5;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #c8ddf2;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #99c0e7;
}

.table-hover .table-info:hover {
  background-color: #b3d0ed;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #b3d0ed;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fce2bd;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #f9ca85;
}

.table-hover .table-warning:hover {
  background-color: #fbd7a5;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #fbd7a5;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ed969e;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c3c5c8;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #8f9399;
}

.table-hover .table-dark:hover {
  background-color: #b6b8bc;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b6b8bc;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #f3f3f3;
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  display: block;
  width: 100%;
  height: 2.875rem;
  padding: 0.875rem 1.375rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1;
  color: #495057;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 2px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
  .tt-query,
  .tt-hint {
    transition: none;
  }
}

.form-control::-ms-expand, .select2-container--default .select2-selection--single::-ms-expand, .select2-container--default .select2-selection--single .select2-search__field::-ms-expand, .typeahead::-ms-expand,
.tt-query::-ms-expand,
.tt-hint::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:-moz-focusring, .select2-container--default .select2-selection--single:-moz-focusring, .select2-container--default .select2-selection--single .select2-search__field:-moz-focusring, .typeahead:-moz-focusring,
.tt-query:-moz-focusring,
.tt-hint:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
.tt-query::placeholder,
.tt-hint::placeholder {
  color: #c9c8c8;
  opacity: 1;
}

.form-control:disabled, .select2-container--default .select2-selection--single:disabled, .select2-container--default .select2-selection--single .select2-search__field:disabled, .typeahead:disabled,
.tt-query:disabled,
.tt-hint:disabled, .form-control[readonly], .select2-container--default .select2-selection--single[readonly], .select2-container--default .select2-selection--single .select2-search__field[readonly], .typeahead[readonly],
.tt-query[readonly],
.tt-hint[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

input[type="date"].form-control, .select2-container--default input.select2-selection--single[type="date"], .select2-container--default .select2-selection--single input.select2-search__field[type="date"], input.typeahead[type="date"],
input.tt-query[type="date"],
input.tt-hint[type="date"],
input[type="time"].form-control,
.select2-container--default input.select2-selection--single[type="time"],
.select2-container--default .select2-selection--single input.select2-search__field[type="time"],
input.typeahead[type="time"],
input.tt-query[type="time"],
input.tt-hint[type="time"],
input[type="datetime-local"].form-control,
.select2-container--default input.select2-selection--single[type="datetime-local"],
.select2-container--default .select2-selection--single input.select2-search__field[type="datetime-local"],
input.typeahead[type="datetime-local"],
input.tt-query[type="datetime-local"],
input.tt-hint[type="datetime-local"],
input[type="month"].form-control,
.select2-container--default input.select2-selection--single[type="month"],
.select2-container--default .select2-selection--single input.select2-search__field[type="month"],
input.typeahead[type="month"],
input.tt-query[type="month"],
input.tt-hint[type="month"] {
  appearance: none;
}

select.form-control:focus::-ms-value, .select2-container--default select.select2-selection--single:focus::-ms-value, .select2-container--default .select2-selection--single select.select2-search__field:focus::-ms-value, select.typeahead:focus::-ms-value,
select.tt-query:focus::-ms-value,
select.tt-hint:focus::-ms-value {
  color: #495057;
  background-color: #ffffff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.875rem + 1px);
  padding-bottom: calc(0.875rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1;
}

.col-form-label-lg {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.875rem 0;
  margin-bottom: 0;
  font-size: 0.875rem;
  line-height: 1;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: 2.25rem;
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: 3.5rem;
  padding: 0.94rem 0.94rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], .select2-container--default select.select2-selection--single[size], .select2-container--default .select2-selection--single select.select2-search__field[size], select.typeahead[size],
select.tt-query[size],
select.tt-hint[size], select.form-control[multiple], .select2-container--default select.select2-selection--single[multiple], .select2-container--default .select2-selection--single select.select2-search__field[multiple], select.typeahead[multiple],
select.tt-query[multiple],
select.tt-hint[multiple] {
  height: auto;
}

textarea.form-control, .select2-container--default textarea.select2-selection--single, .select2-container--default .select2-selection--single textarea.select2-search__field, textarea.typeahead,
textarea.tt-query,
textarea.tt-hint {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input[disabled] ~ .form-check-label,
.form-check-input:disabled ~ .form-check-label {
  color: #a5abcc;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .was-validated .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid, .was-validated .typeahead:valid,
.was-validated .tt-query:valid,
.was-validated .tt-hint:valid, .form-control.is-valid, .select2-container--default .is-valid.select2-selection--single, .select2-container--default .select2-selection--single .is-valid.select2-search__field, .is-valid.typeahead,
.is-valid.tt-query,
.is-valid.tt-hint {
  border-color: #28a745;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus, .was-validated .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .select2-selection--single:valid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid:focus, .was-validated .typeahead:valid:focus,
.was-validated .tt-query:valid:focus,
.was-validated .tt-hint:valid:focus, .form-control.is-valid:focus, .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .is-valid.typeahead:focus,
.is-valid.tt-query:focus,
.is-valid.tt-hint:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated textarea.form-control:valid, .was-validated .select2-container--default textarea.select2-selection--single:valid, .select2-container--default .was-validated textarea.select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:valid, .was-validated textarea.typeahead:valid,
.was-validated textarea.tt-query:valid,
.was-validated textarea.tt-hint:valid, textarea.form-control.is-valid, .select2-container--default textarea.is-valid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-valid.select2-search__field, textarea.is-valid.typeahead,
textarea.is-valid.tt-query,
textarea.is-valid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #28a745;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #34ce57;
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .was-validated .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid, .was-validated .typeahead:invalid,
.was-validated .tt-query:invalid,
.was-validated .tt-hint:invalid, .form-control.is-invalid, .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .is-invalid.typeahead,
.is-invalid.tt-query,
.is-invalid.tt-hint {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .was-validated .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .select2-selection--single:invalid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid:focus, .was-validated .typeahead:invalid:focus,
.was-validated .tt-query:invalid:focus,
.was-validated .tt-hint:invalid:focus, .form-control.is-invalid:focus, .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .is-invalid.typeahead:focus,
.is-invalid.tt-query:focus,
.is-invalid.tt-hint:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, .was-validated .select2-container--default textarea.select2-selection--single:invalid, .select2-container--default .was-validated textarea.select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:invalid, .was-validated textarea.typeahead:invalid,
.was-validated textarea.tt-query:invalid,
.was-validated textarea.tt-hint:invalid, textarea.form-control.is-invalid, .select2-container--default textarea.is-invalid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-invalid.select2-search__field, textarea.is-invalid.typeahead,
textarea.is-invalid.tt-query,
textarea.is-invalid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control, .form-inline .select2-container--default .select2-selection--single, .select2-container--default .form-inline .select2-selection--single, .form-inline .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-inline .select2-search__field, .form-inline .typeahead,
  .form-inline .tt-query,
  .form-inline .tt-hint {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn, .ajax-upload-dragdrop .ajax-file-upload {
  display: inline-block;
  font-weight: 400;
  color: #001737;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.875rem 1.5rem;
  font-size: 0.875rem;
  line-height: 1;
  border-radius: 0.1875rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn, .ajax-upload-dragdrop .ajax-file-upload {
    transition: none;
  }
}

.btn:hover, .ajax-upload-dragdrop .ajax-file-upload:hover {
  color: #001737;
  text-decoration: none;
}

.btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .btn.focus, .ajax-upload-dragdrop .focus.ajax-file-upload {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .ajax-upload-dragdrop .disabled.ajax-file-upload, .btn:disabled, .ajax-upload-dragdrop .ajax-file-upload:disabled {
  opacity: 0.65;
}

.btn:not(:disabled):not(.disabled), .ajax-upload-dragdrop .ajax-file-upload:not(:disabled):not(.disabled) {
  cursor: pointer;
}

a.btn.disabled, .ajax-upload-dragdrop a.disabled.ajax-file-upload,
fieldset:disabled a.btn,
fieldset:disabled .ajax-upload-dragdrop a.ajax-file-upload,
.ajax-upload-dragdrop fieldset:disabled a.ajax-file-upload {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #844fc1;
  border-color: #844fc1;
}

.btn-primary:hover {
  color: #fff;
  background-color: #713dad;
  border-color: #6b3aa3;
}

.btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #713dad;
  border-color: #6b3aa3;
  box-shadow: 0 0 0 0.2rem rgba(150, 105, 202, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #844fc1;
  border-color: #844fc1;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #6b3aa3;
  border-color: #65369a;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(150, 105, 202, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #6c7293;
  border-color: #6c7293;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5c617d;
  border-color: #565b76;
}

.btn-secondary:focus, .btn-secondary.focus {
  color: #fff;
  background-color: #5c617d;
  border-color: #565b76;
  box-shadow: 0 0 0 0.2rem rgba(130, 135, 163, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #6c7293;
  border-color: #6c7293;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #565b76;
  border-color: #51566e;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 135, 163, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #21bf06;
  border-color: #21bf06;
}

.btn-success:hover {
  color: #fff;
  background-color: #1b9a05;
  border-color: #188e04;
}

.btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #1b9a05;
  border-color: #188e04;
  box-shadow: 0 0 0 0.2rem rgba(66, 201, 43, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #21bf06;
  border-color: #21bf06;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #188e04;
  border-color: #168104;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(66, 201, 43, 0.5);
}

.btn-info {
  color: #fff;
  background-color: #3b86d1;
  border-color: #3b86d1;
}

.btn-info:hover {
  color: #fff;
  background-color: #2c73ba;
  border-color: #296db0;
}

.btn-info:focus, .btn-info.focus {
  color: #fff;
  background-color: #2c73ba;
  border-color: #296db0;
  box-shadow: 0 0 0 0.2rem rgba(88, 152, 216, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #3b86d1;
  border-color: #3b86d1;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #296db0;
  border-color: #2766a5;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(88, 152, 216, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #f39915;
  border-color: #f39915;
}

.btn-warning:hover {
  color: #fff;
  background-color: #d7840b;
  border-color: #cb7d0a;
}

.btn-warning:focus, .btn-warning.focus {
  color: #fff;
  background-color: #d7840b;
  border-color: #cb7d0a;
  box-shadow: 0 0 0 0.2rem rgba(212, 136, 24, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #f39915;
  border-color: #f39915;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #fff;
  background-color: #cb7d0a;
  border-color: #be750a;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(212, 136, 24, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}

.btn-danger:focus, .btn-danger.focus {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #bd2130;
  border-color: #b21f2d;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-dark:hover {
  color: #fff;
  background-color: #181d23;
  border-color: #13171c;
}

.btn-dark:focus, .btn-dark.focus {
  color: #fff;
  background-color: #181d23;
  border-color: #13171c;
  box-shadow: 0 0 0 0.2rem rgba(72, 78, 88, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #13171c;
  border-color: #0e1014;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(72, 78, 88, 0.5);
}

.btn-outline-primary {
  color: #844fc1;
  border-color: #844fc1;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #844fc1;
  border-color: #844fc1;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(132, 79, 193, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #844fc1;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #844fc1;
  border-color: #844fc1;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(132, 79, 193, 0.5);
}

.btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  color: #6c7293;
  border-color: #6c7293;
}

.btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover {
  color: #fff;
  background-color: #6c7293;
  border-color: #6c7293;
}

.btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:focus, .btn-outline-secondary.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-cancel {
  box-shadow: 0 0 0 0.2rem rgba(108, 114, 147, 0.5);
}

.btn-outline-secondary.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-cancel, .btn-outline-secondary:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:disabled {
  color: #6c7293;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle,
.editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-cancel {
  color: #fff;
  background-color: #6c7293;
  border-color: #6c7293;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus,
.editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-cancel:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 114, 147, 0.5);
}

.btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit {
  color: #21bf06;
  border-color: #21bf06;
}

.btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover {
  color: #fff;
  background-color: #21bf06;
  border-color: #21bf06;
}

.btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:focus, .btn-outline-success.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-submit {
  box-shadow: 0 0 0 0.2rem rgba(33, 191, 6, 0.5);
}

.btn-outline-success.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-submit, .btn-outline-success:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:disabled {
  color: #21bf06;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle,
.editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-submit {
  color: #fff;
  background-color: #21bf06;
  border-color: #21bf06;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus,
.editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-submit:focus {
  box-shadow: 0 0 0 0.2rem rgba(33, 191, 6, 0.5);
}

.btn-outline-info {
  color: #3b86d1;
  border-color: #3b86d1;
}

.btn-outline-info:hover {
  color: #fff;
  background-color: #3b86d1;
  border-color: #3b86d1;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(59, 134, 209, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #3b86d1;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #3b86d1;
  border-color: #3b86d1;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(59, 134, 209, 0.5);
}

.btn-outline-warning {
  color: #f39915;
  border-color: #f39915;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #f39915;
  border-color: #f39915;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(243, 153, 21, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #f39915;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #f39915;
  border-color: #f39915;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(243, 153, 21, 0.5);
}

.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #282f3a;
  border-color: #282f3a;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 47, 58, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #282f3a;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 47, 58, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #007bff;
  text-decoration: none;
}

.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload {
  padding: 1rem 3rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.1875rem;
}

.btn-sm, .btn-group-sm > .btn, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.1875rem;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #001737;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #f3f3f3;
  border-radius: 0.25rem;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #f3f3f3;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #001737;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #eaeaf1;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #001737;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #001737;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn, .ajax-upload-dragdrop .btn-group > .ajax-file-upload,
.btn-group-vertical > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload {
  position: relative;
  flex: 1 1 auto;
}

.btn-group > .btn:hover, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:hover,
.btn-group-vertical > .btn:hover,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:focus, .btn-group > .btn:active, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:active, .btn-group > .btn.active, .ajax-upload-dragdrop .btn-group > .active.ajax-file-upload,
.btn-group-vertical > .btn:focus,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:focus,
.btn-group-vertical > .btn:active,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:active,
.btn-group-vertical > .btn.active,
.ajax-upload-dragdrop .btn-group-vertical > .active.ajax-file-upload {
  z-index: 1;
}

.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:last-child) > .ajax-file-upload {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:first-child) > .ajax-file-upload {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 1.125rem;
  padding-left: 1.125rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload + .dropdown-toggle-split {
  padding-right: 0.6075rem;
  padding-left: 0.6075rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload + .dropdown-toggle-split {
  padding-right: 2.25rem;
  padding-left: 2.25rem;
}

.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}


.btn-group-vertical > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
.btn-group-vertical > .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:last-child) > .ajax-file-upload {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn,
.ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:first-child) > .ajax-file-upload {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn, .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload,
.btn-group-toggle > .btn-group > .btn,
.ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"], .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"],
.ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control, .select2-container--default .input-group > .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field, .input-group > .typeahead,
.input-group > .tt-query,
.input-group > .tt-hint,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
  margin-bottom: 0;
}

.input-group > .form-control + .form-control, .select2-container--default .input-group > .select2-selection--single + .form-control, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .form-control, .input-group > .typeahead + .form-control, .input-group > .tt-query + .form-control, .input-group > .tt-hint + .form-control, .select2-container--default .input-group > .form-control + .select2-selection--single, .select2-container--default .input-group > .select2-selection--single + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-selection--single, .select2-container--default .input-group > .typeahead + .select2-selection--single, .select2-container--default .input-group > .tt-query + .select2-selection--single, .select2-container--default .input-group > .tt-hint + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .form-control + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-selection--single + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .typeahead + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .tt-query + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .tt-hint + .select2-search__field, .input-group > .form-control + .typeahead, .select2-container--default .input-group > .select2-selection--single + .typeahead, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .typeahead, .input-group > .typeahead + .typeahead, .input-group > .tt-query + .typeahead, .input-group > .tt-hint + .typeahead,
.input-group > .form-control + .tt-query,
.select2-container--default .input-group > .select2-selection--single + .tt-query,
.select2-container--default .select2-selection--single .input-group > .select2-search__field + .tt-query,
.input-group > .typeahead + .tt-query,
.input-group > .tt-query + .tt-query,
.input-group > .tt-hint + .tt-query,
.input-group > .form-control + .tt-hint,
.select2-container--default .input-group > .select2-selection--single + .tt-hint,
.select2-container--default .select2-selection--single .input-group > .select2-search__field + .tt-hint,
.input-group > .typeahead + .tt-hint,
.input-group > .tt-query + .tt-hint,
.input-group > .tt-hint + .tt-hint,
.input-group > .form-control + .custom-select,
.select2-container--default .input-group > .select2-selection--single + .custom-select,
.select2-container--default .select2-selection--single .input-group > .select2-search__field + .custom-select,
.input-group > .typeahead + .custom-select,
.input-group > .tt-query + .custom-select,
.input-group > .tt-hint + .custom-select,
.input-group > .form-control + .custom-file,
.select2-container--default .input-group > .select2-selection--single + .custom-file,
.select2-container--default .select2-selection--single .input-group > .select2-search__field + .custom-file,
.input-group > .typeahead + .custom-file,
.input-group > .tt-query + .custom-file,
.input-group > .tt-hint + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.select2-container--default .input-group > .form-control-plaintext + .select2-selection--single,
.select2-container--default .select2-selection--single .input-group > .form-control-plaintext + .select2-search__field,
.input-group > .form-control-plaintext + .typeahead,
.input-group > .form-control-plaintext + .tt-query,
.input-group > .form-control-plaintext + .tt-hint,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.select2-container--default .input-group > .custom-select + .select2-selection--single,
.select2-container--default .select2-selection--single .input-group > .custom-select + .select2-search__field,
.input-group > .custom-select + .typeahead,
.input-group > .custom-select + .tt-query,
.input-group > .custom-select + .tt-hint,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.select2-container--default .input-group > .custom-file + .select2-selection--single,
.select2-container--default .select2-selection--single .input-group > .custom-file + .select2-search__field,
.input-group > .custom-file + .typeahead,
.input-group > .custom-file + .tt-query,
.input-group > .custom-file + .tt-hint,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:focus, .select2-container--default .input-group > .select2-selection--single:focus, .select2-container--default .select2-selection--single .input-group > .select2-search__field:focus, .input-group > .typeahead:focus,
.input-group > .tt-query:focus,
.input-group > .tt-hint:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}

.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}

.input-group > .form-control:not(:last-child), .select2-container--default .input-group > .select2-selection--single:not(:last-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:last-child), .input-group > .typeahead:not(:last-child),
.input-group > .tt-query:not(:last-child),
.input-group > .tt-hint:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child), .select2-container--default .input-group > .select2-selection--single:not(:first-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:first-child), .input-group > .typeahead:not(:first-child),
.input-group > .tt-query:not(:first-child),
.input-group > .tt-hint:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: flex;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: flex;
}

.input-group-prepend .btn, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload,
.input-group-append .btn,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload,
.ajax-upload-dragdrop .input-group-append .ajax-file-upload {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn:focus, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload:focus,
.input-group-append .btn:focus,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload:focus,
.ajax-upload-dragdrop .input-group-append .ajax-file-upload:focus {
  z-index: 3;
}

.input-group-prepend .btn + .btn, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .btn, .input-group-prepend .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .btn + .ajax-file-upload, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .ajax-file-upload,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .input-group-text,
.ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-prepend .ajax-upload-dragdrop .input-group-text + .ajax-file-upload,
.ajax-upload-dragdrop .input-group-prepend .input-group-text + .ajax-file-upload,
.input-group-append .btn + .btn,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + .btn,
.ajax-upload-dragdrop .input-group-append .ajax-file-upload + .btn,
.input-group-append .ajax-upload-dragdrop .btn + .ajax-file-upload,
.ajax-upload-dragdrop .input-group-append .btn + .ajax-file-upload,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload,
.ajax-upload-dragdrop .input-group-append .ajax-file-upload + .ajax-file-upload,
.input-group-append .btn + .input-group-text,
.input-group-append .ajax-upload-dragdrop .ajax-file-upload + .input-group-text,
.ajax-upload-dragdrop .input-group-append .ajax-file-upload + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn,
.input-group-append .ajax-upload-dragdrop .input-group-text + .ajax-file-upload,
.ajax-upload-dragdrop .input-group-append .input-group-text + .ajax-file-upload {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.875rem 1.375rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 2px;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group-lg > .form-control:not(textarea), .select2-container--default .input-group-lg > .select2-selection--single:not(textarea), .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field:not(textarea), .input-group-lg > .typeahead:not(textarea),
.input-group-lg > .tt-query:not(textarea),
.input-group-lg > .tt-hint:not(textarea),
.input-group-lg > .custom-select {
  height: 3.5rem;
}

.input-group-lg > .form-control, .select2-container--default .input-group-lg > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field, .input-group-lg > .typeahead,
.input-group-lg > .tt-query,
.input-group-lg > .tt-hint,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.ajax-upload-dragdrop .input-group-lg > .input-group-prepend > .ajax-file-upload,
.input-group-lg > .input-group-append > .btn,
.ajax-upload-dragdrop .input-group-lg > .input-group-append > .ajax-file-upload {
  padding: 0.94rem 0.94rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea), .select2-container--default .input-group-sm > .select2-selection--single:not(textarea), .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field:not(textarea), .input-group-sm > .typeahead:not(textarea),
.input-group-sm > .tt-query:not(textarea),
.input-group-sm > .tt-hint:not(textarea),
.input-group-sm > .custom-select {
  height: 2.25rem;
}

.input-group-sm > .form-control, .select2-container--default .input-group-sm > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field, .input-group-sm > .typeahead,
.input-group-sm > .tt-query,
.input-group-sm > .tt-hint,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.ajax-upload-dragdrop .input-group-sm > .input-group-prepend > .ajax-file-upload,
.input-group-sm > .input-group-append > .btn,
.ajax-upload-dragdrop .input-group-sm > .input-group-append > .ajax-file-upload {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem;
}

.input-group > .input-group-prepend > .btn, .ajax-upload-dragdrop .input-group > .input-group-prepend > .ajax-file-upload,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.ajax-upload-dragdrop .input-group > .input-group-append:not(:last-child) > .ajax-file-upload,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.ajax-upload-dragdrop .input-group > .input-group-append:last-child > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn, .ajax-upload-dragdrop .input-group > .input-group-append > .ajax-file-upload,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.ajax-upload-dragdrop .input-group > .input-group-prepend:not(:first-child) > .ajax-file-upload,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.ajax-upload-dragdrop .input-group > .input-group-prepend:first-child > .ajax-file-upload:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  z-index: 1;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
  color-adjust: exact;
}

.custom-control-inline {
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  left: 0;
  z-index: -1;
  width: 1rem;
  height: 1.25rem;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #007bff;
  background-color: #007bff;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #80bdff;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}

.custom-control-input[disabled] ~ .custom-control-label, .custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input[disabled] ~ .custom-control-label::before, .custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #adb5bd solid 1px;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-switch {
  padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
  top: calc(0.25rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #adb5bd;
  border-radius: 0.5rem;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  appearance: none;
}

.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #ffffff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  display: none;
}

.custom-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
}

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input[disabled] ~ .custom-file-label,
.custom-file-input:disabled ~ .custom-file-label {
  background-color: #e9ecef;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  height: 1.4rem;
  padding: 0;
  background-color: transparent;
  appearance: none;
}

.custom-range:focus {
  outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    transition: none;
  }
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    transition: none;
  }
}

.custom-range::-moz-range-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    transition: none;
  }
}

.custom-range::-ms-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
  cursor: default;
}

.custom-range:disabled::-ms-thumb {
  background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-control-label::before,
  .custom-file-label,
  .custom-select {
    transition: none;
  }
}

.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #ebedf2;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #ebedf2 #ebedf2 #ebedf2;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #001737;
  background-color: #ffffff;
  border-color: #ebedf2 #ebedf2 #ffffff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar .container,
.navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid #e4e4f4;
  border-radius: 0.25rem;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}

.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid #e4e4f4;
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid #e4e4f4;
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
  border-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-top,
.card-img-bottom {
  flex-shrink: 0;
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    display: flex;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    flex: 1 0 0%;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group > .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group > .card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    column-count: 3;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion {
  overflow-anchor: none;
}

.accordion > .card {
  overflow: hidden;
}

.accordion > .card:not(:last-of-type) {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.accordion > .card:not(:first-of-type) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.accordion > .card > .card-header {
  border-radius: 0;
  margin-bottom: -1px;
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0.56rem 1.13rem;
  margin-bottom: 1rem;
  font-size: 0.875rem;
  list-style: none;
  background-color: transparent;
  border-radius: 0.25rem;
}

.breadcrumb-item {
  display: flex;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #495057;
}

.pagination {
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  z-index: 2;
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 3;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .badge {
    transition: none;
  }
}

a.badge:hover, a.badge:focus {
  text-decoration: none;
}

.badge:empty {
  display: none;
}

.btn .badge, .ajax-upload-dragdrop .ajax-file-upload .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #844fc1;
}

a.badge-primary:hover, a.badge-primary:focus {
  color: #fff;
  background-color: #6b3aa3;
}

a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(132, 79, 193, 0.5);
}

.badge-secondary {
  color: #fff;
  background-color: #6c7293;
}

a.badge-secondary:hover, a.badge-secondary:focus {
  color: #fff;
  background-color: #565b76;
}

a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(108, 114, 147, 0.5);
}

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  color: #fff;
  background-color: #21bf06;
}

a.badge-success:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:hover, a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus {
  color: #fff;
  background-color: #188e04;
}

a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus, a.badge-success.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-online {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(33, 191, 6, 0.5);
}

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  color: #fff;
  background-color: #3b86d1;
}

a.badge-info:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:hover, a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus {
  color: #fff;
  background-color: #296db0;
}

a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus, a.badge-info.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-offline {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(59, 134, 209, 0.5);
}

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  color: #212529;
  background-color: #f39915;
}

a.badge-warning:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:hover, a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus {
  color: #212529;
  background-color: #cb7d0a;
}

a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus, a.badge-warning.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-busy {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(243, 153, 21, 0.5);
}

.badge-danger {
  color: #fff;
  background-color: #dc3545;
}

a.badge-danger:hover, a.badge-danger:focus {
  color: #fff;
  background-color: #bd2130;
}

a.badge-danger:focus, a.badge-danger.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

a.badge-light:hover, a.badge-light:focus {
  color: #212529;
  background-color: #dae0e5;
}

a.badge-light:focus, a.badge-light.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.badge-dark {
  color: #fff;
  background-color: #282f3a;
}

a.badge-dark:hover, a.badge-dark:focus {
  color: #fff;
  background-color: #13171c;
}

a.badge-dark:focus, a.badge-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(40, 47, 58, 0.5);
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #452964;
  background-color: #e6dcf3;
  border-color: #ddceee;
}

.alert-primary hr {
  border-top-color: #d0bbe7;
}

.alert-primary .alert-link {
  color: #2c1a40;
}

.alert-secondary {
  color: #383b4c;
  background-color: #e2e3e9;
  border-color: #d6d8e1;
}

.alert-secondary hr {
  border-top-color: #c7cad6;
}

.alert-secondary .alert-link {
  color: #22242f;
}

.alert-success {
  color: #116303;
  background-color: #d3f2cd;
  border-color: #c1edb9;
}

.alert-success hr {
  border-top-color: #afe8a5;
}

.alert-success .alert-link {
  color: #093202;
}

.alert-info {
  color: #1f466d;
  background-color: #d8e7f6;
  border-color: #c8ddf2;
}

.alert-info hr {
  border-top-color: #b3d0ed;
}

.alert-info .alert-link {
  color: #142d45;
}

.alert-warning {
  color: #7e500b;
  background-color: #fdebd0;
  border-color: #fce2bd;
}

.alert-warning hr {
  border-top-color: #fbd7a5;
}

.alert-warning .alert-link {
  color: #4f3207;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger hr {
  border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
  color: #491217;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #15181e;
  background-color: #d4d5d8;
  border-color: #c3c5c8;
}

.alert-dark hr {
  border-top-color: #b6b8bc;
}

.alert-dark .alert-link {
  color: black;
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: flex;
  height: 1rem;
  overflow: hidden;
  line-height: 0;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  animation: progress-bar-stripes 1s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    animation: none;
  }
}

.media {
  display: flex;
  align-items: flex-start;
}

.media-body {
  flex: 1;
}

.list-group {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}

.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.list-group-item + .list-group-item {
  border-top-width: 0;
}

.list-group-item + .list-group-item.active {
  margin-top: -1px;
  border-top-width: 1px;
}

.list-group-horizontal {
  flex-direction: row;
}

.list-group-horizontal > .list-group-item:first-child {
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}

.list-group-horizontal > .list-group-item:last-child {
  border-top-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}

.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: 1px;
  border-left-width: 0;
}

.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: -1px;
  border-left-width: 1px;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: -1px;
    border-left-width: 1px;
  }
}

.list-group-flush {
  border-radius: 0;
}

.list-group-flush > .list-group-item {
  border-width: 0 0 1px;
}

.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  color: #452964;
  background-color: #ddceee;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #452964;
  background-color: #d0bbe7;
}

.list-group-item-primary.list-group-item-action.active {
  color: #ffffff;
  background-color: #452964;
  border-color: #452964;
}

.list-group-item-secondary {
  color: #383b4c;
  background-color: #d6d8e1;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #383b4c;
  background-color: #c7cad6;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #ffffff;
  background-color: #383b4c;
  border-color: #383b4c;
}

.list-group-item-success {
  color: #116303;
  background-color: #c1edb9;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #116303;
  background-color: #afe8a5;
}

.list-group-item-success.list-group-item-action.active {
  color: #ffffff;
  background-color: #116303;
  border-color: #116303;
}

.list-group-item-info {
  color: #1f466d;
  background-color: #c8ddf2;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #1f466d;
  background-color: #b3d0ed;
}

.list-group-item-info.list-group-item-action.active {
  color: #ffffff;
  background-color: #1f466d;
  border-color: #1f466d;
}

.list-group-item-warning {
  color: #7e500b;
  background-color: #fce2bd;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #7e500b;
  background-color: #fbd7a5;
}

.list-group-item-warning.list-group-item-action.active {
  color: #ffffff;
  background-color: #7e500b;
  border-color: #7e500b;
}

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #721c24;
  background-color: #f1b0b7;
}

.list-group-item-danger.list-group-item-action.active {
  color: #ffffff;
  background-color: #721c24;
  border-color: #721c24;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #ffffff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #15181e;
  background-color: #c3c5c8;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #15181e;
  background-color: #b6b8bc;
}

.list-group-item-dark.list-group-item-action.active {
  color: #ffffff;
  background-color: #15181e;
  border-color: #15181e;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}

.close:hover {
  color: #000;
  text-decoration: none;
}

.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: .75;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
}

a.close.disabled {
  pointer-events: none;
}

.toast {
  flex-basis: 350px;
  max-width: 350px;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  opacity: 0;
  border-radius: 0.25rem;
}

.toast:not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast.showing {
  opacity: 1;
}

.toast.show {
  display: block;
  opacity: 1;
}

.toast.hide {
  display: none;
}

.toast-header {
  display: flex;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.toast-body {
  padding: 0.75rem;
}

.modal-open {
  overflow: hidden;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: transform 0.4s ease;
  transform: translate(0, -50px);
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  transform: none;
}

.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}

.modal-dialog-scrollable {
  display: flex;
  max-height: calc(100% - 20px);
}

.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 20px);
  overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - 20px);
}

.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 20px);
  height: min-content;
  content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
  flex-direction: column;
  justify-content: center;
  height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #f3f3f3;
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #f3f3f3;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.modal-header .close {
  padding: 1rem 1rem;
  margin: -25px -26px -25px auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 0.9375rem;
}

.modal-footer {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: 0.6875rem;
  border-top: 1px solid #f3f3f3;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px);
}

.modal-footer > * {
  margin: 0.25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 30px auto;
  }
  .modal-dialog-scrollable {
    max-height: calc(100% - 60px);
  }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 60px);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 60px);
  }
  .modal-dialog-centered::before {
    height: calc(100vh - 60px);
    height: min-content;
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 90%;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.4rem 0.75rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.375rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
  bottom: calc(-0.5rem - 1px);
}

.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
  top: calc(-0.5rem - 1px);
}

.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: flex;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: .5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

@keyframes spinner-border {
  to {
    transform: rotate(360deg);
  }
}

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  animation: spinner-border .75s linear infinite;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  animation: spinner-grow .75s linear infinite;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary, .settings-panel .color-tiles .tiles.primary {
  background-color: #844fc1 !important;
}

a.bg-primary:hover, .settings-panel .color-tiles a.tiles.primary:hover, a.bg-primary:focus, .settings-panel .color-tiles a.tiles.primary:focus,
button.bg-primary:hover,
.settings-panel .color-tiles button.tiles.primary:hover,
button.bg-primary:focus,
.settings-panel .color-tiles button.tiles.primary:focus {
  background-color: #6b3aa3 !important;
}

.bg-secondary {
  background-color: #6c7293 !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #565b76 !important;
}

.bg-success, .settings-panel .color-tiles .tiles.success {
  background-color: #21bf06 !important;
}

a.bg-success:hover, .settings-panel .color-tiles a.tiles.success:hover, a.bg-success:focus, .settings-panel .color-tiles a.tiles.success:focus,
button.bg-success:hover,
.settings-panel .color-tiles button.tiles.success:hover,
button.bg-success:focus,
.settings-panel .color-tiles button.tiles.success:focus {
  background-color: #188e04 !important;
}

.bg-info, .settings-panel .color-tiles .tiles.info {
  background-color: #3b86d1 !important;
}

a.bg-info:hover, .settings-panel .color-tiles a.tiles.info:hover, a.bg-info:focus, .settings-panel .color-tiles a.tiles.info:focus,
button.bg-info:hover,
.settings-panel .color-tiles button.tiles.info:hover,
button.bg-info:focus,
.settings-panel .color-tiles button.tiles.info:focus {
  background-color: #296db0 !important;
}

.bg-warning, .settings-panel .color-tiles .tiles.warning {
  background-color: #f39915 !important;
}

a.bg-warning:hover, .settings-panel .color-tiles a.tiles.warning:hover, a.bg-warning:focus, .settings-panel .color-tiles a.tiles.warning:focus,
button.bg-warning:hover,
.settings-panel .color-tiles button.tiles.warning:hover,
button.bg-warning:focus,
.settings-panel .color-tiles button.tiles.warning:focus {
  background-color: #cb7d0a !important;
}

.bg-danger, .settings-panel .color-tiles .tiles.danger {
  background-color: #dc3545 !important;
}

a.bg-danger:hover, .settings-panel .color-tiles a.tiles.danger:hover, a.bg-danger:focus, .settings-panel .color-tiles a.tiles.danger:focus,
button.bg-danger:hover,
.settings-panel .color-tiles button.tiles.danger:hover,
button.bg-danger:focus,
.settings-panel .color-tiles button.tiles.danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark, .settings-panel .color-tiles .tiles.dark {
  background-color: #282f3a !important;
}

a.bg-dark:hover, .settings-panel .color-tiles a.tiles.dark:hover, a.bg-dark:focus, .settings-panel .color-tiles a.tiles.dark:focus,
button.bg-dark:hover,
.settings-panel .color-tiles button.tiles.dark:hover,
button.bg-dark:focus,
.settings-panel .color-tiles button.tiles.dark:focus {
  background-color: #13171c !important;
}

.bg-white {
  background-color: #ffffff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border, .loader-demo-box {
  border: 1px solid #f3f3f3 !important;
}

.border-top {
  border-top: 1px solid #f3f3f3 !important;
}

.border-right {
  border-right: 1px solid #f3f3f3 !important;
}

.border-bottom {
  border-bottom: 1px solid #f3f3f3 !important;
}

.border-left {
  border-left: 1px solid #f3f3f3 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #844fc1 !important;
}

.border-secondary, .loader-demo-box {
  border-color: #6c7293 !important;
}

.border-success {
  border-color: #21bf06 !important;
}

.border-info {
  border-color: #3b86d1 !important;
}

.border-warning {
  border-color: #f39915 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #282f3a !important;
}

.border-white {
  border-color: #ffffff !important;
}

.rounded-sm {
  border-radius: 0.2rem !important;
}

.rounded, .loader-demo-box {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
  border-radius: 0.3rem !important;
}

.rounded-circle, .settings-panel .color-tiles .tiles {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-user-status, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-date {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex, .loader-demo-box, .layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item a .item-title, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
  display: flex !important;
}

.d-inline-flex {
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-date {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-user-status {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.embed-responsive-21by9::before {
  padding-top: 42.85714%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row, .navbar .navbar-menu-wrapper .navbar-nav {
  flex-direction: row !important;
}

.flex-column {
  flex-direction: column !important;
}

.flex-row-reverse {
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  flex-direction: column-reverse !important;
}

.flex-wrap {
  flex-wrap: wrap !important;
}

.flex-nowrap {
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  flex-grow: 0 !important;
}

.flex-grow-1 {
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  flex-shrink: 1 !important;
}

.justify-content-start {
  justify-content: flex-start !important;
}

.justify-content-end {
  justify-content: flex-end !important;
}

.justify-content-center, .layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item a .item-title {
  justify-content: center !important;
}

.justify-content-between {
  justify-content: space-between !important;
}

.justify-content-around {
  justify-content: space-around !important;
}

.align-items-start {
  align-items: flex-start !important;
}

.align-items-end {
  align-items: flex-end !important;
}

.align-items-center, .loader-demo-box, .layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item a .item-title, .navbar .navbar-menu-wrapper .navbar-nav .nav-item, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
  align-items: center !important;
}

.align-items-baseline {
  align-items: baseline !important;
}

.align-items-stretch, .navbar .navbar-menu-wrapper .navbar-nav {
  align-items: stretch !important;
}

.align-content-start {
  align-content: flex-start !important;
}

.align-content-end {
  align-content: flex-end !important;
}

.align-content-center {
  align-content: center !important;
}

.align-content-between {
  align-content: space-between !important;
}

.align-content-around {
  align-content: space-around !important;
}

.align-content-stretch {
  align-content: stretch !important;
}

.align-self-auto {
  align-self: auto !important;
}

.align-self-start {
  align-self: flex-start !important;
}

.align-self-end {
  align-self: flex-end !important;
}

.align-self-center {
  align-self: center !important;
}

.align-self-baseline {
  align-self: baseline !important;
}

.align-self-stretch, .navbar .navbar-menu-wrapper .navbar-nav, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings {
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.user-select-all {
  user-select: all !important;
}

.user-select-auto {
  user-select: auto !important;
}

.user-select-none {
  user-select: none !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports (position: sticky) {
  .sticky-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.vw-100 {
  width: 100vw !important;
}

.vh-100 {
  height: 100vh !important;
}

.m-0 {
  margin: 0 !important;
}

.mt-0, .demo-modal .modal-dialog,
.my-0 {
  margin-top: 0 !important;
}

.mr-0, .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles, .rtl .settings-panel .events i,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0, .rtl .preview-list .preview-item .preview-thumbnail .preview-icon i,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2, .template-demo > .btn-group,
.template-demo > .btn-group-vertical, .template-demo .circle-progress,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2, .template-demo > .btn, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .template-demo > .btn-group,
.template-demo > .btn-group-vertical, .template-demo > .dropdown,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2, .btn-toolbar .btn-group + .btn-group, .rtl .settings-panel .events i,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3, .template-demo > .btn, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .template-demo > .btn-toolbar,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3, .template-demo > .btn-toolbar,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3, .template-demo .circle-progress-block,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2,
.template-demo .circle-progress-block {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2,
.template-demo .circle-progress-block {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.mt-n3,
.my-n3 {
  margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mt-n5,
.my-n5 {
  margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important;
  }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important;
  }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important;
  }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important;
  }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important;
  }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important;
  }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important;
  }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important;
  }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important;
  }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important;
  }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important;
  }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important;
  }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important;
  }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important;
  }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important;
  }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important;
  }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-bolder {
  font-weight: bolder !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #ffffff !important;
}

.text-primary {
  color: #844fc1 !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #5e3391 !important;
}

.text-secondary {
  color: #6c7293 !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #4c5067 !important;
}

.text-success {
  color: #21bf06 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #147504 !important;
}

.text-info {
  color: #3b86d1 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #24609b !important;
}

.text-warning {
  color: #f39915 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #b26e09 !important;
}

.text-danger {
  color: #dc3545 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #a71d2a !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important;
}

.text-dark {
  color: #282f3a !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #090a0d !important;
}

.text-body {
  color: #001737 !important;
}

.text-muted, .preview-list .preview-item .preview-item-content p .content-category {
  color: #a5abcc !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-break: break-word !important;
  word-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #ffffff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #f3f3f3;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #f3f3f3;
  }
}

/*-------------------------------------------------------------------*/
/* === Template mixins === */
/* Miscellaneous Mixins */
.settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

.settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap;
}

/* Animation Mixins */
@keyframes dropdownAnimation {
  from {
    opacity: 0;
    transform: translate3d(0, -30px, 0);
  }
  to {
    opacity: 1;
    transform: none;
    transform: translate3d(0, 0px, 0);
  }
}

.dropdownAnimation, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  animation-name: dropdownAnimation;
  -webkit-animation-duration: 0.25s;
  -moz-animation-duration: 0.25s;
  -ms-animation-duration: 0.25s;
  -o-animation-duration: 0.25s;
  animation-duration: 0.25s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}

.fadeOut {
  animation-name: fadeOut;
}

.infinite-spin, #settings-trigger i {
  animation-name: spin;
  animation-duration: 3s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }
  to {
    opacity: 1;
    transform: none;
  }
}

.fadeInUp, #settings-trigger {
  animation-name: fadeInUp;
}

/*-------------------------------------------------------------------*/
/* === Core Styles === */
/* Reset Styles */
body {
  padding: 0;
  margin: 0;
  overflow-x: hidden;
}

.form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint, .form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  outline: 0;
}

a,
div,
h1,
h2,
h3,
h4,
h5,
p,
span {
  text-shadow: none;
}

[type=button]:focus,
a:active,
a:focus,
a:visited,
button::-moz-focus-inner,
input[type=reset]::-moz-focus-inner,
input[type=button]::-moz-focus-inner,
input[type=submit]::-moz-focus-inner,
input[type=file] > input[type=button]::-moz-focus-inner,
select::-moz-focus-inner {
  outline: 0;
}

input, .form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus,
input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
  outline-width: 0;
  outline-color: transparent;
  box-shadow: none;
  outline-style: none;
}

textarea {
  resize: none;
  overflow-x: hidden;
}

.btn, .ajax-upload-dragdrop .ajax-file-upload,
.btn-group.open .dropdown-toggle,
.btn:active,
.ajax-upload-dragdrop .ajax-file-upload:active, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .btn:hover, .ajax-upload-dragdrop .ajax-file-upload:hover,
.btn:visited,
.ajax-upload-dragdrop .ajax-file-upload:visited,
a,
a:active,
a:checked,
a:focus,
a:hover,
a:visited,
body,
button,
button:active,
button:hover,
button:visited,
div,
input,
input:active,
input:focus,
input:hover,
input:visited,
select,
select:active,
select:focus,
select:visited,
textarea,
textarea:active,
textarea:focus,
textarea:hover,
textarea:visited {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
}

.btn.active.focus, .ajax-upload-dragdrop .active.focus.ajax-file-upload,
.btn.active:focus,
.ajax-upload-dragdrop .active.ajax-file-upload:focus, .btn.focus, .ajax-upload-dragdrop .focus.ajax-file-upload,
.btn:active.focus,
.ajax-upload-dragdrop .ajax-file-upload:active.focus,
.btn:active:focus,
.ajax-upload-dragdrop .ajax-file-upload:active:focus, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus,
button,
button:active,
button:checked,
button:focus,
button:hover,
button:visited {
  outline: 0;
  outline-offset: 0;
}

.bootstrap-select .dropdown-toggle:focus {
  outline: 0;
  outline-offset: 0;
}

.dropdown-menu > li > a:active,
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:visited {
  outline: 0;
}

a:focus,
input:focus {
  border-color: transparent;
  outline: none;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-ExtraBold.eot");
  src: url("../../fonts/Poppins/Poppins-ExtraBold.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-ExtraBold.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-ExtraBold.woff") format("woff"), url("../../fonts/Poppins/Poppins-ExtraBold.ttf") format("truetype");
  font-weight: 800;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-Medium.eot");
  src: url("../../fonts/Poppins/Poppins-Medium.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-Medium.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-Medium.woff") format("woff"), url("../../fonts/Poppins/Poppins-Medium.ttf") format("truetype");
  font-weight: 500;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-Black.eot");
  src: url("../../fonts/Poppins/Poppins-Black.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-Black.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-Black.woff") format("woff"), url("../../fonts/Poppins/Poppins-Black.ttf") format("truetype");
  font-weight: 900;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-Thin.eot");
  src: url("../../fonts/Poppins/Poppins-Thin.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-Thin.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-Thin.woff") format("woff"), url("../../fonts/Poppins/Poppins-Thin.ttf") format("truetype");
  font-weight: 100;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-Regular.eot");
  src: url("../../fonts/Poppins/Poppins-Regular.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-Regular.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-Regular.woff") format("woff"), url("../../fonts/Poppins/Poppins-Regular.ttf") format("truetype");
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-ExtraLight.eot");
  src: url("../../fonts/Poppins/Poppins-ExtraLight.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-ExtraLight.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-ExtraLight.woff") format("woff"), url("../../fonts/Poppins/Poppins-ExtraLight.ttf") format("truetype");
  font-weight: 200;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-SemiBold.eot");
  src: url("../../fonts/Poppins/Poppins-SemiBold.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-SemiBold.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-SemiBold.woff") format("woff"), url("../../fonts/Poppins/Poppins-SemiBold.ttf") format("truetype");
  font-weight: 600;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-Bold.eot");
  src: url("../../fonts/Poppins/Poppins-Bold.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-Bold.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-Bold.woff") format("woff"), url("../../fonts/Poppins/Poppins-Bold.ttf") format("truetype");
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'Poppins';
  src: url("../../fonts/Poppins/Poppins-Light.eot");
  src: url("../../fonts/Poppins/Poppins-Light.eot?#iefix") format("embedded-opentype"), url("../../fonts/Poppins/Poppins-Light.woff2") format("woff2"), url("../../fonts/Poppins/Poppins-Light.woff") format("woff"), url("../../fonts/Poppins/Poppins-Light.ttf") format("truetype");
  font-weight: 300;
  font-style: normal;
}

.bg-twitter {
  background: #2caae1;
}

.bg-facebook {
  background: #3b579d;
}

.bg-google {
  background: #dc4a38;
}

.bg-linkedin {
  background: #0177b5;
}

.bg-pinterest {
  background: #cc2127;
}

.bg-youtube {
  background: #e52d27;
}

.bg-github {
  background: #333333;
}

.bg-behance {
  background: #1769ff;
}

.bg-dribbble {
  background: #ea4c89;
}

.bg-reddit {
  background: #ff4500;
}

.bg-gradient-primary {
  background: linear-gradient(to right, #3023ae, #c86dd7);
}

.bg-gradient-secondary {
  background: linear-gradient(to right, #e7ebf0, #868e96);
}

.bg-gradient-success {
  background: linear-gradient(45deg, #7bffce, #30c93e);
}

.bg-gradient-info {
  background: linear-gradient(to bottom, #0e4cfd, #6a8eff);
}

.bg-gradient-warning {
  background: linear-gradient(to top, #f76b1c, #fad961);
}

.bg-gradient-danger {
  background: linear-gradient(316deg, #fc5286, #fbaaa2);
}

.bg-gradient-light {
  background: linear-gradient(to right, #cfd9df 0%, #e2ebf0 100%);
}

.bg-gradient-dark {
  background: linear-gradient(to right, #7d7979 0%, #000000 100%);
}

/* Typography */
body {
  font-size: 1rem;
  font-family: "Poppins", sans-serif;
  font-weight: initial;
  line-height: normal;
  -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-weight: 500;
  line-height: 1;
}

p {
  font-size: 0.875rem;
  margin-bottom: .5rem;
  line-height: 1.3rem;
}

h1, .h1 {
  font-size: 3.125rem;
}

h2, .h2 {
  font-size: 2.5rem;
}

h3, .h3 {
  font-size: 1.875rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.display-1 {
  font-size: 3.75rem;
}

@media (max-width: 991px) {
  .display-1 {
    font-size: 3rem;
  }
}

.display-2 {
  font-size: 3.125rem;
}

@media (max-width: 991px) {
  .display-2 {
    font-size: 2.5rem;
  }
}

.display-3 {
  font-size: 2.5rem;
}

@media (max-width: 991px) {
  .display-3 {
    font-size: 2rem;
  }
}

.display-4 {
  font-size: 1.875rem;
}

@media (max-width: 991px) {
  .display-4 {
    font-size: 1.5rem;
  }
}

.display-5 {
  font-size: 1.25rem;
}

@media (max-width: 991px) {
  .display-5 {
    font-size: 1rem;
  }
}

.blockquote {
  padding: 1.25rem;
  border: 1px solid #f3f3f3;
}

address p {
  margin-bottom: 0;
}

.blockquote-primary {
  border-color: #844fc1;
}

.blockquote-primary .blockquote-footer {
  color: #844fc1;
}

.blockquote-secondary {
  border-color: #6c7293;
}

.blockquote-secondary .blockquote-footer {
  color: #6c7293;
}

.blockquote-success {
  border-color: #21bf06;
}

.blockquote-success .blockquote-footer {
  color: #21bf06;
}

.blockquote-info {
  border-color: #3b86d1;
}

.blockquote-info .blockquote-footer {
  color: #3b86d1;
}

.blockquote-warning {
  border-color: #f39915;
}

.blockquote-warning .blockquote-footer {
  color: #f39915;
}

.blockquote-danger {
  border-color: #dc3545;
}

.blockquote-danger .blockquote-footer {
  color: #dc3545;
}

.blockquote-light {
  border-color: #f8f9fa;
}

.blockquote-light .blockquote-footer {
  color: #f8f9fa;
}

.blockquote-dark {
  border-color: #282f3a;
}

.blockquote-dark .blockquote-footer {
  color: #282f3a;
}

.error-page h1 {
  font-size: 12rem;
}

@media (max-width: 991px) {
  .error-page h1 {
    font-size: 8rem;
  }
}

.text-twitter {
  color: #2caae1;
}

.text-facebook {
  color: #3b579d;
}

.text-google {
  color: #dc4a38;
}

.text-linkedin {
  color: #0177b5;
}

.text-pinterest {
  color: #cc2127;
}

.text-youtube {
  color: #e52d27;
}

.text-github {
  color: #333333;
}

.text-behance {
  color: #1769ff;
}

.text-dribbble {
  color: #ea4c89;
}

.text-reddit {
  color: #ff4500;
}

.page-header {
  margin-bottom: 2.5rem;
}

.page-header .page-title {
  margin-bottom: 0;
  line-height: .85;
}

.font-weight-medium {
  font-weight: 600;
}

/* Miscellanoeous */
body,
html {
  overflow-x: hidden;
  padding-right: 0 !important;
}

*:-moz-full-screen,
*:-webkit-full-screen,
*:fullscreen *:-ms-fullscreen {
  overflow: auto;
}

.container-scroller {
  overflow: hidden;
}

pre {
  background: #e8eff4;
  padding: 15px;
  font-size: 14px;
}

code {
  padding: 5px;
  color: #dc3545;
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-size: 0.875rem;
  border-radius: 4px;
}

.purchase-popup {
  background: #fff;
  padding: 15px 20px;
  border-radius: 3px;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 9999;
}

.purchase-popup .btn, .purchase-popup .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .purchase-popup .ajax-file-upload {
  margin-right: 20px;
  font-weight: 500;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  transition-duration: 0.2s;
}

.purchase-popup .btn.download-button, .purchase-popup .ajax-upload-dragdrop .download-button.ajax-file-upload, .ajax-upload-dragdrop .purchase-popup .download-button.ajax-file-upload {
  background: rgba(249, 249, 249, 0.7);
  color: #969292;
  border: 1px solid #d7d7d7;
}

.purchase-popup .btn.purchase-button, .purchase-popup .ajax-upload-dragdrop .purchase-button.ajax-file-upload, .ajax-upload-dragdrop .purchase-popup .purchase-button.ajax-file-upload {
  background-color: rgba(172, 50, 228, 0.9);
  background-image: -owg-theme-gradient-color(primary);
  background-image: -webkit-theme-gradient-color(primary);
  background-image: -moz-theme-gradient-color(primary);
  background-image: -o-theme-gradient-color(primary);
  background-image: theme-gradient-color(primary);
  color: #ffffff;
  border: none;
  line-height: 1;
  vertical-align: middle;
}

.purchase-popup p {
  margin-bottom: auto;
  margin-top: auto;
  color: #7e7e7e;
  font-weight: 400;
  vertical-align: middle;
  line-height: 1;
}

.purchase-popup i {
  vertical-align: middle;
  line-height: 1;
  margin: auto 0;
  color: #b1b1b1;
}

/* Footer */
.footer {
  background: #f4f5fa;
  padding: 0 1.812rem 2.062rem 1.812rem;
  transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -webkit-transition: all 0.25s ease;
  -ms-transition: all 0.25s ease;
  font-size: calc(0.875rem - 0.05rem);
  font-family: "Poppins", sans-serif;
  font-weight: 400;
}

.footer a {
  color: #844fc1;
  font-size: inherit;
}

@media (max-width: 991px) {
  .footer {
    margin-left: 0;
    width: 100%;
  }
}

/* Utilities */
.grid-margin, .purchase-popup {
  margin-bottom: 1.375rem;
}

@media (min-width: 576px) {
  .grid-margin-sm-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 768px) {
  .grid-margin-md-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 992px) {
  .grid-margin-lg-0 {
    margin-bottom: 0;
  }
}

@media (min-width: 1200px) {
  .grid-margin-xl-0 {
    margin-bottom: 0;
  }
}

.img-lg {
  width: 92px;
  height: 92px;
}

.img-sm {
  width: 43px;
  height: 43px;
}

.img-xs {
  width: 37px;
  height: 37px;
}

.img-ss, .settings-panel .color-tiles .tiles {
  width: 26px;
  height: 26px;
}

.stretch-card {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: stretch;
  align-items: stretch;
  -webkit-justify-content: stretch;
  justify-content: stretch;
}

.stretch-card > .card {
  width: 100%;
  min-width: 100%;
}

@media (min-width: 576px) {
  .border-right-sm {
    border-right: 1px solid #f3f3f3;
  }
}

@media (min-width: 768px) {
  .border-right-md {
    border-right: 1px solid #f3f3f3;
  }
}

@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #f3f3f3;
  }
}

@media (min-width: 576px) {
  .border-left-sm {
    border-left: 1px solid #f3f3f3;
  }
}

@media (min-width: 768px) {
  .border-left-md {
    border-left: 1px solid #f3f3f3;
  }
}

@media (min-width: 992px) {
  .border-left-lg {
    border-left: 1px solid #f3f3f3;
  }
}

.text-gray, .card .card-subtitle {
  color: #8c8c8c;
}

.text-black {
  color: #000;
}

.text-small {
  font-size: 12px;
}

.flex-grow {
  flex-grow: 1;
}

/* Demo Styles */
.template-demo .slider-wrap {
  height: 100px;
}

.template-demo .progress {
  margin-top: 1.5rem;
}

.template-demo > h2,
.template-demo > h3,
.template-demo > h4,
.template-demo > h5,
.template-demo > h6,
.template-demo > h1 {
  border-top: 1px solid #f3f3f3;
  padding: 0.5rem 0 0;
}

.template-demo .ul-slider.noUi-horizontal {
  margin-top: 2rem;
}

.template-demo .ul-slider.noUi-vertical {
  margin-right: 2rem;
}

.template-demo > .dropdown {
  display: inline-block;
  margin-bottom: 0.5rem;
}

.template-demo nav .breadcrumb {
  margin-bottom: 1.375rem;
}

.template-demo nav:last-child .breadcrumb {
  margin-bottom: 0;
}

.template-demo .editable-form > .form-group {
  border-bottom: 1px solid #f3f3f3;
  padding-bottom: 0.8rem;
  margin-bottom: 0.8rem;
}

.template-demo .circle-progress {
  padding: 15px;
}

.demo-modal {
  position: static;
  display: block;
}

.demo-modal .modal-dialog.modal-lg {
  max-width: 100%;
}

.loader-demo-box {
  width: 100%;
  height: 200px;
}

.dropdown-menu-static-demo {
  height: 250px;
  margin-bottom: 20px;
}

.dropdown-menu-static-demo .dropdown-menu {
  z-index: 0;
}

.rounded-legend ul li {
  list-style-type: none;
  color: #a5abcc;
  font-size: .75rem;
}

.rounded-legend ul li .legend-dots {
  width: 1rem;
  height: 1rem;
  border-radius: 100%;
  display: inline-block;
  vertical-align: text-bottom;
  margin-right: .5rem;
}

.rtl .rounded-legend ul li .legend-dots {
  margin-left: .5rem;
}

.rounded-legend.legend-horizontal {
  display: -webkit-flex;
  display: flex;
}

.rounded-legend.legend-horizontal ul li {
  display: inline-block;
  margin-right: 1.5rem;
}

.rtl .rounded-legend.legend-horizontal ul li {
  margin-right: auto;
  margin-left: 1.5rem;
}

.rounded-legend.legend-top-right ul {
  float: right;
}

.rtl .rounded-legend.legend-top-right ul {
  float: left;
}

.rounded-legend.legend-vertical ul li {
  margin-top: 1rem;
}

.demo-chart {
  height: 300px;
}

@media (max-width: 767px) {
  .demo-chart {
    height: 200px;
  }
}

.chartjs-legend ul {
  margin-bottom: 0;
  list-style: none;
  padding-left: 0;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-justify-content: start;
  justify-content: start;
}

.chartjs-legend ul li {
  margin-right: 8%;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
}

.chartjs-legend ul li span {
  height: 1rem;
  width: 1rem;
  margin-right: .4rem;
  display: inline-block;
  font-size: 0.875rem;
  border-radius: 100%;
}

.rtl .chartjs-legend ul {
  padding-right: 0;
}

.rtl .chartjs-legend ul li {
  margin-right: 0;
  margin-left: 8%;
}

.rtl .chartjs-legend ul li span {
  margin-right: 0;
  margin-left: 1rem;
}

.chartjs-legend.analytics-legend ul {
  padding-left: 0;
}

.documentation {
  padding-top: 0;
  max-width: 100%;
}

.documentation .content-wrapper {
  padding-top: 0;
  min-height: calc(100vh - 75px);
}

.doc-table-contents,
.doc-header {
  position: fixed;
}

.doc-header {
  padding-top: 24px;
  padding-bottom: 24px;
  z-index: 2;
  background: #f4f5fa;
  z-index: 999;
}

.doc-content {
  padding-top: 157px;
}

.doc-table-contents {
  overflow: auto;
  max-height: calc(100% - 157px);
}

.doc-table-contents ul li {
  margin-top: 10px;
}

.doc-credits ul li {
  margin-bottom: 10px;
}

.doc-credits ul li a {
  margin-left: .25rem;
}

.demo-vector-map {
  width: 100%;
  height: 500px;
}

.sparkline-demo-chart canvas {
  max-width: 100%;
}

.layouts-preview-main-wrapper {
  background: #efefef;
}

.layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item a {
  position: relative;
  text-decoration: none;
}

.layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item a img {
  border-radius: 4px;
  -webkit-box-shadow: 0 25px 50px rgba(8, 21, 66, 0.06);
  box-shadow: 0 25px 50px rgba(8, 21, 66, 0.06);
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}

.layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item a .item-title {
  height: 70px;
  margin-top: -69px;
  background: white;
  border-radius: 0 0 4px 4px;
}

.layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item a .item-title h4 {
  font-size: 1.2rem;
  color: #2e384d;
}

.layouts-preview-main-wrapper .layouts-preview-wrapper .preview-item:hover a img {
  -webkit-box-shadow: 0 5px 12px rgba(126, 142, 177, 0.2);
  box-shadow: 0 5px 12px rgba(126, 142, 177, 0.2);
}

.project-orders-table thead tr th:first-child {
  padding-left: 1.9rem;
  padding-right: 1.9rem;
}

.project-orders-table thead tr th:last-child {
  padding-right: 1.9rem;
}

.project-orders-table tbody tr td:first-child {
  padding-left: 1.9rem;
}

.project-orders-table tbody tr td:last-child {
  padding-right: 1.9rem;
}

.newsletter-card .form .form-group .form-control, .newsletter-card .form .form-group .select2-container--default .select2-selection--single, .select2-container--default .newsletter-card .form .form-group .select2-selection--single, .newsletter-card .form .form-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .newsletter-card .form .form-group .select2-search__field, .newsletter-card .form .form-group .typeahead,
.newsletter-card .form .form-group .tt-query,
.newsletter-card .form .form-group .tt-hint {
  border-radius: 25px;
  border: 0;
  max-width: 85%;
  margin: 0 auto;
  height: 42px;
}

.newsletter-card .form .form-group .form-control::placeholder, .newsletter-card .form .form-group .select2-container--default .select2-selection--single::placeholder, .select2-container--default .newsletter-card .form .form-group .select2-selection--single::placeholder, .newsletter-card .form .form-group .select2-container--default .select2-selection--single .select2-search__field::placeholder, .select2-container--default .select2-selection--single .newsletter-card .form .form-group .select2-search__field::placeholder, .newsletter-card .form .form-group .typeahead::placeholder,
.newsletter-card .form .form-group .tt-query::placeholder,
.newsletter-card .form .form-group .tt-hint::placeholder {
  text-align: center;
  color: #001737;
}

.newsletter-card .form button {
  padding: 14px 40px;
}

.profile-card .avatar {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  width: 87px;
  height: 87px;
  border-radius: 50px;
  border: 4px dashed rgba(255, 255, 255, 0.58);
}

.profile-card .avatar img {
  border-radius: 30px;
  width: 60px;
  height: 60px;
}

.profile-card .info {
  border-top: 1px solid rgba(255, 250, 250, 0.22);
}

/*-------------------------------------------------------------------*/
/* === Components === */
/* Accordions */
.accordion .card {
  margin-bottom: .75rem;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  border-radius: .25rem;
}

.accordion .card .card-header {
  background-color: transparent;
  border: none;
  padding: 2rem;
}

.accordion .card .card-header * {
  font-weight: 400;
  font-size: 1rem;
}

.accordion .card .card-header a {
  display: block;
  color: inherit;
  text-decoration: none;
  font-size: inherit;
  position: relative;
  -webkit-transition: color 0.5s ease;
  -moz-transition: color 0.5s ease;
  -ms-transition: color 0.5s ease;
  -o-transition: color 0.5s ease;
  transition: color 0.5s ease;
  padding-right: 1.5rem;
}

.accordion .card .card-header a:before {
  font-family: "typicons";
  position: absolute;
  right: 7px;
  top: 0;
  font-size: 18px;
  display: block;
}

.accordion .card .card-header a[aria-expanded="true"] {
  color: #844fc1;
}

.accordion .card .card-header a[aria-expanded="true"]:before {
  content: "\e0cf";
}

.accordion .card .card-header a[aria-expanded="false"]:before {
  content: "\e0bd";
}

.accordion .card .card-body {
  font-size: 14px;
  padding: 0 2rem 2rem 2rem;
  font-weight: 400;
  line-height: 1.5;
}

.accordion .card .card-body i {
  font-size: 1.25rem;
}

.accordion.accordion-bordered {
  background: #ffffff;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
}

.accordion.accordion-bordered .card {
  margin: 0 2rem;
  border-top: 1px solid #f3f3f3;
  box-shadow: none;
  border-radius: 0;
  border-left: 0;
  border-right: 0;
}

.accordion.accordion-bordered .card .card-header,
.accordion.accordion-bordered .card .card-body {
  padding-left: 0;
  padding-right: 0;
}

.accordion.accordion-bordered .card .card-header a:before {
  color: #dc3545;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="true"]:before {
  content: "\e01d";
}

.accordion.accordion-bordered .card .card-header a[aria-expanded="false"]:before {
  content: "\e01e";
}

.accordion.accordion-bordered .card:first-child {
  border-top: 0;
}

.accordion.accordion-bordered .card:last-child {
  border-bottom: 0;
}

.accordion.accordion-filled .card {
  padding: 0;
}

.accordion.accordion-filled .card .card-header {
  padding: 0;
}

.accordion.accordion-filled .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-filled .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"] {
  background: #3b86d1;
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="true"]:before {
  content: "\e01d";
  color: #ffffff;
}

.accordion.accordion-filled .card .card-header a[aria-expanded="false"]:before {
  content: "\e01e";
}

.accordion.accordion-filled .card .card-body {
  padding: 0 2rem 2rem 2rem;
  background: #3b86d1;
  color: #ffffff;
}

.accordion.accordion-solid-header .card {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-header .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-header .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"] {
  background: #844fc1;
  color: #ffffff;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="true"]:before {
  content: "\e01d";
  color: #ffffff;
}

.accordion.accordion-solid-header .card .card-header a[aria-expanded="false"]:before {
  content: "\e01e";
}

.accordion.accordion-solid-header .card .card-body {
  padding: 2rem;
}

.accordion.accordion-solid-content .card {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header {
  padding: 0;
}

.accordion.accordion-solid-content .card .card-header a {
  padding: 2rem 4.5rem 2rem 2rem;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  -ms-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}

.accordion.accordion-solid-content .card .card-header a:before {
  top: 40%;
  right: 40px;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="true"]:before {
  content: "\e01d";
}

.accordion.accordion-solid-content .card .card-header a[aria-expanded="false"]:before {
  content: "\e01e";
}

.accordion.accordion-solid-content .card .card-body {
  padding: 2rem;
  background: #21bf06;
  color: #ffffff;
}

.accordion.accordion-multi-colored .card .card-header,
.accordion.accordion-multi-colored .card .card-body {
  background: transparent;
  color: #ffffff;
}

.accordion.accordion-multi-colored .card:nth-child(1) {
  background: #844fc1;
}

.accordion.accordion-multi-colored .card:nth-child(2) {
  background: #21bf06;
}

.accordion.accordion-multi-colored .card:nth-child(3) {
  background: #dc3545;
}

.accordion.accordion-multi-colored .card:nth-child(4) {
  background: #f39915;
}

.accordion.accordion-multi-colored .card:nth-child(5) {
  background: #3b86d1;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"] {
  color: inherit;
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"]:before {
  content: "\e01d";
}

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="false"]:before {
  content: "\e01e";
}

/* Badges */
.badge {
  border-radius: 4px;
  font-size: 12px;
  line-height: 1;
  padding: .345rem .46rem;
  font-weight: normal;
}

.badge.badge-pill {
  border-radius: 10rem;
}

/*Badge outlined variations*/
.badge-outline-primary {
  color: #844fc1;
  border: 1px solid #844fc1;
}

.badge-outline-secondary {
  color: #6c7293;
  border: 1px solid #6c7293;
}

.badge-outline-success {
  color: #21bf06;
  border: 1px solid #21bf06;
}

.badge-outline-info {
  color: #3b86d1;
  border: 1px solid #3b86d1;
}

.badge-outline-warning {
  color: #f39915;
  border: 1px solid #f39915;
}

.badge-outline-danger {
  color: #dc3545;
  border: 1px solid #dc3545;
}

.badge-outline-light {
  color: #f8f9fa;
  border: 1px solid #f8f9fa;
}

.badge-outline-dark {
  color: #282f3a;
  border: 1px solid #282f3a;
}

/* Buttons */
.btn, .ajax-upload-dragdrop .ajax-file-upload {
  font-size: 0.875rem;
  line-height: 1;
  font-weight: 400;
  /* Buttons with only icons */
  /* Buttons with icon and text */
}

.btn i, .ajax-upload-dragdrop .ajax-file-upload i {
  font-size: 1rem;
}

.btn.btn-rounded, .ajax-upload-dragdrop .btn-rounded.ajax-file-upload {
  border-radius: 50px;
}

.btn.btn-sm, .btn-group-sm > .btn, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .ajax-upload-dragdrop .btn-sm.ajax-file-upload {
  font-size: 0.875rem;
  padding: 0.47rem 0.6rem;
}

.btn.btn-lg, .btn-group-lg > .btn, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .ajax-upload-dragdrop .btn-lg.ajax-file-upload {
  font-size: 0.875rem;
}

.btn.btn-xs, .ajax-upload-dragdrop .btn-xs.ajax-file-upload, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-submit, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-cancel {
  padding: 0.5rem 0.75rem;
  font-size: 0.625rem;
}

.btn.btn-icon, .ajax-upload-dragdrop .btn-icon.ajax-file-upload {
  width: 42px;
  height: 42px;
  padding: 0;
}

.btn.btn-icon-text .btn-icon-prepend, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-prepend {
  margin-right: .5rem;
}

.btn.btn-icon-text .btn-icon-append, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-append {
  margin-left: 0;
}

.btn.btn-social-icon, .ajax-upload-dragdrop .btn-social-icon.ajax-file-upload {
  width: 50px;
  height: 50px;
  padding: 0;
}

.btn-group .btn + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload {
  border-left: 0;
}

/*social buttons*/
.btn-twitter {
  background: #2caae1;
  color: #ffffff;
}

.btn-twitter:hover, .btn-twitter:focus {
  background: #1b8dbf;
  color: #ffffff;
}

.btn-twitter.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #59bce7;
}

.btn-twitter.btn-social-icon-text i {
  background: #2caae1;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-twitter {
  border: 1px solid #2caae1;
  color: #2caae1;
}

.btn-outline-twitter:hover {
  background: #2caae1;
  color: #ffffff;
}

.btn-facebook {
  background: #3b579d;
  color: #ffffff;
}

.btn-facebook:hover, .btn-facebook:focus {
  background: #2d4278;
  color: #ffffff;
}

.btn-facebook.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4e6ebd;
}

.btn-facebook.btn-social-icon-text i {
  background: #3b579d;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-facebook {
  border: 1px solid #3b579d;
  color: #3b579d;
}

.btn-outline-facebook:hover {
  background: #3b579d;
  color: #ffffff;
}

.btn-google {
  background: #dc4a38;
  color: #ffffff;
}

.btn-google:hover, .btn-google:focus {
  background: #bf3322;
  color: #ffffff;
}

.btn-google.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e47163;
}

.btn-google.btn-social-icon-text i {
  background: #dc4a38;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-google {
  border: 1px solid #dc4a38;
  color: #dc4a38;
}

.btn-outline-google:hover {
  background: #dc4a38;
  color: #ffffff;
}

.btn-linkedin {
  background: #0177b5;
  color: #ffffff;
}

.btn-linkedin:hover, .btn-linkedin:focus {
  background: #015682;
  color: #ffffff;
}

.btn-linkedin.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #0198e8;
}

.btn-linkedin.btn-social-icon-text i {
  background: #0177b5;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-linkedin {
  border: 1px solid #0177b5;
  color: #0177b5;
}

.btn-outline-linkedin:hover {
  background: #0177b5;
  color: #ffffff;
}

.btn-pinterest {
  background: #cc2127;
  color: #ffffff;
}

.btn-pinterest:hover, .btn-pinterest:focus {
  background: #a01a1f;
  color: #ffffff;
}

.btn-pinterest.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #e04046;
}

.btn-pinterest.btn-social-icon-text i {
  background: #cc2127;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-pinterest {
  border: 1px solid #cc2127;
  color: #cc2127;
}

.btn-outline-pinterest:hover {
  background: #cc2127;
  color: #ffffff;
}

.btn-youtube {
  background: #e52d27;
  color: #ffffff;
}

.btn-youtube:hover, .btn-youtube:focus {
  background: #c21d17;
  color: #ffffff;
}

.btn-youtube.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ea5955;
}

.btn-youtube.btn-social-icon-text i {
  background: #e52d27;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-youtube {
  border: 1px solid #e52d27;
  color: #e52d27;
}

.btn-outline-youtube:hover {
  background: #e52d27;
  color: #ffffff;
}

.btn-github {
  background: #333333;
  color: #ffffff;
}

.btn-github:hover, .btn-github:focus {
  background: #1a1a1a;
  color: #ffffff;
}

.btn-github.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4d4d4d;
}

.btn-github.btn-social-icon-text i {
  background: #333333;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-github {
  border: 1px solid #333333;
  color: #333333;
}

.btn-outline-github:hover {
  background: #333333;
  color: #ffffff;
}

.btn-behance {
  background: #1769ff;
  color: #ffffff;
}

.btn-behance:hover, .btn-behance:focus {
  background: #0050e3;
  color: #ffffff;
}

.btn-behance.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #4a8aff;
}

.btn-behance.btn-social-icon-text i {
  background: #1769ff;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-behance {
  border: 1px solid #1769ff;
  color: #1769ff;
}

.btn-outline-behance:hover {
  background: #1769ff;
  color: #ffffff;
}

.btn-dribbble {
  background: #ea4c89;
  color: #ffffff;
}

.btn-dribbble:hover, .btn-dribbble:focus {
  background: #e51e6b;
  color: #ffffff;
}

.btn-dribbble.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ef7aa7;
}

.btn-dribbble.btn-social-icon-text i {
  background: #ea4c89;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-dribbble {
  border: 1px solid #ea4c89;
  color: #ea4c89;
}

.btn-outline-dribbble:hover {
  background: #ea4c89;
  color: #ffffff;
}

.btn-reddit {
  background: #ff4500;
  color: #ffffff;
}

.btn-reddit:hover, .btn-reddit:focus {
  background: #cc3700;
  color: #ffffff;
}

.btn-reddit.btn-social-icon-text {
  padding: 0 1.5rem 0 0;
  background: #ff6a33;
}

.btn-reddit.btn-social-icon-text i {
  background: #ff4500;
  padding: .75rem;
  display: inline-block;
  margin-right: 1.5rem;
}

.btn-outline-reddit {
  border: 1px solid #ff4500;
  color: #ff4500;
}

.btn-outline-reddit:hover {
  background: #ff4500;
  color: #ffffff;
}

/* inverse buttons */
.btn-inverse-primary {
  background-color: rgba(132, 79, 193, 0.2);
  background-image: none;
  border-color: rgba(132, 79, 193, 0);
}

.btn-inverse-primary:not(.btn-inverse-light) {
  color: #844fc1;
}

.btn-inverse-primary:hover {
  color: #ffffff;
  background-color: #844fc1;
  border-color: #844fc1;
}

.btn-inverse-primary.focus, .btn-inverse-primary:focus {
  box-shadow: 0 0 0 3px rgba(132, 79, 193, 0.5);
}

.btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
  color: #844fc1;
  background-color: transparent;
}

.btn-inverse-primary.active, .btn-inverse-primary:active,
.show > .btn-inverse-primary.dropdown-toggle {
  color: #ffffff;
  background-color: #844fc1;
  border-color: #844fc1;
}

.btn-primary, .btn-primary:hover {
  box-shadow: 0 2px 2px 0 rgba(132, 79, 193, 0.14), 0 3px 1px -2px rgba(132, 79, 193, 0.2), 0 1px 5px 0 rgba(132, 79, 193, 0.12);
}

.btn-inverse-secondary {
  background-color: rgba(108, 114, 147, 0.2);
  background-image: none;
  border-color: rgba(108, 114, 147, 0);
}

.btn-inverse-secondary:not(.btn-inverse-light) {
  color: #6c7293;
}

.btn-inverse-secondary:hover {
  color: #ffffff;
  background-color: #6c7293;
  border-color: #6c7293;
}

.btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
  box-shadow: 0 0 0 3px rgba(108, 114, 147, 0.5);
}

.btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
  color: #6c7293;
  background-color: transparent;
}

.btn-inverse-secondary.active, .btn-inverse-secondary:active,
.show > .btn-inverse-secondary.dropdown-toggle {
  color: #ffffff;
  background-color: #6c7293;
  border-color: #6c7293;
}

.btn-secondary, .btn-secondary:hover {
  box-shadow: 0 2px 2px 0 rgba(108, 114, 147, 0.14), 0 3px 1px -2px rgba(108, 114, 147, 0.2), 0 1px 5px 0 rgba(108, 114, 147, 0.12);
}

.btn-inverse-success {
  background-color: rgba(33, 191, 6, 0.2);
  background-image: none;
  border-color: rgba(33, 191, 6, 0);
}

.btn-inverse-success:not(.btn-inverse-light) {
  color: #21bf06;
}

.btn-inverse-success:hover {
  color: #ffffff;
  background-color: #21bf06;
  border-color: #21bf06;
}

.btn-inverse-success.focus, .btn-inverse-success:focus {
  box-shadow: 0 0 0 3px rgba(33, 191, 6, 0.5);
}

.btn-inverse-success.disabled, .btn-inverse-success:disabled {
  color: #21bf06;
  background-color: transparent;
}

.btn-inverse-success.active, .btn-inverse-success:active,
.show > .btn-inverse-success.dropdown-toggle {
  color: #ffffff;
  background-color: #21bf06;
  border-color: #21bf06;
}

.btn-success, .btn-success:hover {
  box-shadow: 0 2px 2px 0 rgba(33, 191, 6, 0.14), 0 3px 1px -2px rgba(33, 191, 6, 0.2), 0 1px 5px 0 rgba(33, 191, 6, 0.12);
}

.btn-inverse-info {
  background-color: rgba(59, 134, 209, 0.2);
  background-image: none;
  border-color: rgba(59, 134, 209, 0);
}

.btn-inverse-info:not(.btn-inverse-light) {
  color: #3b86d1;
}

.btn-inverse-info:hover {
  color: #ffffff;
  background-color: #3b86d1;
  border-color: #3b86d1;
}

.btn-inverse-info.focus, .btn-inverse-info:focus {
  box-shadow: 0 0 0 3px rgba(59, 134, 209, 0.5);
}

.btn-inverse-info.disabled, .btn-inverse-info:disabled {
  color: #3b86d1;
  background-color: transparent;
}

.btn-inverse-info.active, .btn-inverse-info:active,
.show > .btn-inverse-info.dropdown-toggle {
  color: #ffffff;
  background-color: #3b86d1;
  border-color: #3b86d1;
}

.btn-info, .btn-info:hover {
  box-shadow: 0 2px 2px 0 rgba(59, 134, 209, 0.14), 0 3px 1px -2px rgba(59, 134, 209, 0.2), 0 1px 5px 0 rgba(59, 134, 209, 0.12);
}

.btn-inverse-warning {
  background-color: rgba(243, 153, 21, 0.2);
  background-image: none;
  border-color: rgba(243, 153, 21, 0);
}

.btn-inverse-warning:not(.btn-inverse-light) {
  color: #f39915;
}

.btn-inverse-warning:hover {
  color: #ffffff;
  background-color: #f39915;
  border-color: #f39915;
}

.btn-inverse-warning.focus, .btn-inverse-warning:focus {
  box-shadow: 0 0 0 3px rgba(243, 153, 21, 0.5);
}

.btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
  color: #f39915;
  background-color: transparent;
}

.btn-inverse-warning.active, .btn-inverse-warning:active,
.show > .btn-inverse-warning.dropdown-toggle {
  color: #ffffff;
  background-color: #f39915;
  border-color: #f39915;
}

.btn-warning, .btn-warning:hover {
  box-shadow: 0 2px 2px 0 rgba(243, 153, 21, 0.14), 0 3px 1px -2px rgba(243, 153, 21, 0.2), 0 1px 5px 0 rgba(243, 153, 21, 0.12);
}

.btn-inverse-danger {
  background-color: rgba(220, 53, 69, 0.2);
  background-image: none;
  border-color: rgba(220, 53, 69, 0);
}

.btn-inverse-danger:not(.btn-inverse-light) {
  color: #dc3545;
}

.btn-inverse-danger:hover {
  color: #ffffff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-inverse-danger.focus, .btn-inverse-danger:focus {
  box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.5);
}

.btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-inverse-danger.active, .btn-inverse-danger:active,
.show > .btn-inverse-danger.dropdown-toggle {
  color: #ffffff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger, .btn-danger:hover {
  box-shadow: 0 2px 2px 0 rgba(220, 53, 69, 0.14), 0 3px 1px -2px rgba(220, 53, 69, 0.2), 0 1px 5px 0 rgba(220, 53, 69, 0.12);
}

.btn-inverse-light {
  background-color: rgba(248, 249, 250, 0.2);
  background-image: none;
  border-color: rgba(248, 249, 250, 0);
}

.btn-inverse-light:not(.btn-inverse-light) {
  color: #f8f9fa;
}

.btn-inverse-light:hover {
  color: #ffffff;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-inverse-light.focus, .btn-inverse-light:focus {
  box-shadow: 0 0 0 3px rgba(248, 249, 250, 0.5);
}

.btn-inverse-light.disabled, .btn-inverse-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-inverse-light.active, .btn-inverse-light:active,
.show > .btn-inverse-light.dropdown-toggle {
  color: #ffffff;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light, .btn-light:hover {
  box-shadow: 0 2px 2px 0 rgba(248, 249, 250, 0.14), 0 3px 1px -2px rgba(248, 249, 250, 0.2), 0 1px 5px 0 rgba(248, 249, 250, 0.12);
}

.btn-inverse-dark {
  background-color: rgba(40, 47, 58, 0.2);
  background-image: none;
  border-color: rgba(40, 47, 58, 0);
}

.btn-inverse-dark:not(.btn-inverse-light) {
  color: #282f3a;
}

.btn-inverse-dark:hover {
  color: #ffffff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-inverse-dark.focus, .btn-inverse-dark:focus {
  box-shadow: 0 0 0 3px rgba(40, 47, 58, 0.5);
}

.btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
  color: #282f3a;
  background-color: transparent;
}

.btn-inverse-dark.active, .btn-inverse-dark:active,
.show > .btn-inverse-dark.dropdown-toggle {
  color: #ffffff;
  background-color: #282f3a;
  border-color: #282f3a;
}

.btn-dark, .btn-dark:hover {
  box-shadow: 0 2px 2px 0 rgba(40, 47, 58, 0.14), 0 3px 1px -2px rgba(40, 47, 58, 0.2), 0 1px 5px 0 rgba(40, 47, 58, 0.12);
}

/* Breadcrumbs */
.breadcrumb {
  border: 1px solid #f3f3f3;
}

.breadcrumb .breadcrumb-item {
  font-size: 0.875rem;
}

.breadcrumb.breadcrumb-custom {
  padding: 0 0;
  border-color: #dbe3e6;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item {
  font-size: 0.875rem;
  background: #dbe3e6;
  padding: 0.56rem 10px;
  color: #000;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item:before {
  content: "";
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a {
  position: relative;
  color: inherit;
  border: 1px solid #dbe3e6;
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before, .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  position: absolute;
  top: -9px;
  width: 0;
  height: 0;
  content: "";
  border-top: 21px solid transparent;
  border-bottom: 21px solid transparent;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:before {
  right: -22px;
  z-index: 3;
  border-left-color: #dbe3e6;
  border-left-style: solid;
  border-left-width: 12px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
  border-top: 21px solid transparent;
  border-bottom: 22px solid transparent;
  border-left: 12px solid #ffffff;
  top: -9px;
  right: -23px;
}

.breadcrumb.breadcrumb-custom .breadcrumb-item span {
  display: inline-block;
  vertical-align: top;
}

.breadcrumb.bg-success, .settings-panel .color-tiles .breadcrumb.tiles.success, .breadcrumb.bg-dark, .settings-panel .color-tiles .breadcrumb.tiles.dark, .breadcrumb.bg-danger, .settings-panel .color-tiles .breadcrumb.tiles.danger, .breadcrumb.bg-warning, .settings-panel .color-tiles .breadcrumb.tiles.warning, .breadcrumb.bg-primary, .settings-panel .color-tiles .breadcrumb.tiles.primary, .breadcrumb.bg-info, .settings-panel .color-tiles .breadcrumb.tiles.info {
  border: none;
}

.breadcrumb.bg-success .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item, .breadcrumb.bg-dark .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item, .breadcrumb.bg-danger .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item, .breadcrumb.bg-warning .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item, .breadcrumb.bg-primary .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item, .breadcrumb.bg-info .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item {
  color: #ffffff;
}

.breadcrumb.bg-success .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item:before, .breadcrumb.bg-dark .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item:before, .breadcrumb.bg-danger .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item:before, .breadcrumb.bg-warning .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item:before, .breadcrumb.bg-primary .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item:before, .breadcrumb.bg-info .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item:before {
  color: inherit;
}

.breadcrumb.bg-success .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item a, .breadcrumb.bg-success .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item span, .breadcrumb.bg-dark .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item a, .breadcrumb.bg-dark .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item span, .breadcrumb.bg-danger .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item a, .breadcrumb.bg-danger .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item span, .breadcrumb.bg-warning .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item a, .breadcrumb.bg-warning .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item span, .breadcrumb.bg-primary .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item a, .breadcrumb.bg-primary .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item span, .breadcrumb.bg-info .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item a, .breadcrumb.bg-info .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item span {
  color: inherit;
}

/* inverse breadcrumb */
.bg-inverse-primary {
  background: #c6ade2;
  border-color: #844fc1;
}

.bg-inverse-primary .breadcrumb-item {
  color: #844fc1;
}

.bg-inverse-primary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-primary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-primary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item {
  background: #c6ade2;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a {
  color: #844fc1;
  border: none;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #c6ade2;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item span {
  color: #844fc1;
}

.bg-inverse-primary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-secondary {
  background: #b6b9c9;
  border-color: #6c7293;
}

.bg-inverse-secondary .breadcrumb-item {
  color: #6c7293;
}

.bg-inverse-secondary .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-secondary .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-secondary.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item {
  background: #b6b9c9;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a {
  color: #6c7293;
  border: none;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #b6b9c9;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item span {
  color: #6c7293;
}

.bg-inverse-secondary.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-success {
  background: #65f94b;
  border-color: #21bf06;
}

.bg-inverse-success .breadcrumb-item {
  color: #21bf06;
}

.bg-inverse-success .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-success .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-success.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item {
  background: #65f94b;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a {
  color: #21bf06;
  border: none;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #65f94b;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item span {
  color: #21bf06;
}

.bg-inverse-success.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-info {
  background: #a2c6e9;
  border-color: #3b86d1;
}

.bg-inverse-info .breadcrumb-item {
  color: #3b86d1;
}

.bg-inverse-info .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-info .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-info.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item {
  background: #a2c6e9;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a {
  color: #3b86d1;
  border: none;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #a2c6e9;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item span {
  color: #3b86d1;
}

.bg-inverse-info.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-warning {
  background: #f9ce8e;
  border-color: #f39915;
}

.bg-inverse-warning .breadcrumb-item {
  color: #f39915;
}

.bg-inverse-warning .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-warning .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-warning.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item {
  background: #f9ce8e;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a {
  color: #f39915;
  border: none;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #f9ce8e;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item span {
  color: #f39915;
}

.bg-inverse-warning.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-danger {
  background: #efa2a9;
  border-color: #dc3545;
}

.bg-inverse-danger .breadcrumb-item {
  color: #dc3545;
}

.bg-inverse-danger .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-danger .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-danger.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item {
  background: #efa2a9;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a {
  color: #dc3545;
  border: none;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #efa2a9;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item span {
  color: #dc3545;
}

.bg-inverse-danger.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-light {
  background: white;
  border-color: #f8f9fa;
}

.bg-inverse-light .breadcrumb-item {
  color: #f8f9fa;
}

.bg-inverse-light .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-light .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-light.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item {
  background: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a {
  color: #f8f9fa;
  border: none;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: white;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item span {
  color: #f8f9fa;
}

.bg-inverse-light.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

.bg-inverse-dark {
  background: #5c6c85;
  border-color: #282f3a;
}

.bg-inverse-dark .breadcrumb-item {
  color: #282f3a;
}

.bg-inverse-dark .breadcrumb-item:before {
  color: inherit;
}

.bg-inverse-dark .breadcrumb-item a {
  color: inherit;
}

.bg-inverse-dark.breadcrumb-custom {
  background: transparent;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item {
  background: #5c6c85;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a {
  color: #282f3a;
  border: none;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item a:before {
  border-left-color: #5c6c85;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item span {
  color: #282f3a;
}

.bg-inverse-dark.breadcrumb-custom .breadcrumb-item:last-child {
  background: transparent;
}

/* Cards */
.card {
  box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  -webkit-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  -moz-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  -ms-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
}

.card .card-body {
  padding: 1.5rem 1.8rem;
}

.card .card-body + .card-body {
  padding-top: 1rem;
}

.card .card-title {
  color: #001737;
  margin-bottom: 1.5rem;
  text-transform: capitalize;
  font-size: 1.125rem;
}

.card .card-subtitle {
  font-weight: 400;
  margin-top: 0.625rem;
  margin-bottom: 0.625rem;
}

.card .card-description {
  margin-bottom: .875rem;
  font-weight: 400;
  color: #76838f;
}

.card.card-outline-success {
  border: 1px solid #21bf06;
}

.card.card-outline-primary {
  border: 1px solid #844fc1;
}

.card.card-outline-warning {
  border: 1px solid #f39915;
}

.card.card-outline-danger {
  border: 1px solid #dc3545;
}

.card.card-rounded {
  border-radius: 5px;
}

.card.card-faded {
  background: #b5b0b2;
  border-color: #b5b0b2;
}

.card.card-circle-progress {
  color: #ffffff;
  text-align: center;
}

.card.card-img-holder {
  position: relative;
}

.card.card-img-holder .card-img-absolute {
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
}

.card.card-weather .weather-daily .weather-day {
  opacity: .5;
  font-weight: 900;
}

.card.card-weather .weather-daily i {
  font-size: 20px;
}

.card.card-weather .weather-daily .weather-temp {
  margin-top: .5rem;
  margin-bottom: 0;
  opacity: .5;
  font-size: .75rem;
}

.card-inverse-primary {
  background: rgba(132, 79, 193, 0.2);
  border: 1px solid #7949b2;
  color: #643c93;
}

.card-inverse-secondary {
  background: rgba(108, 114, 147, 0.2);
  border: 1px solid #636987;
  color: #525770;
}

.card-inverse-success {
  background: rgba(33, 191, 6, 0.2);
  border: 1px solid #1eb006;
  color: #199105;
}

.card-inverse-info {
  background: rgba(59, 134, 209, 0.2);
  border: 1px solid #367bc0;
  color: #2d669f;
}

.card-inverse-warning {
  background: rgba(243, 153, 21, 0.2);
  border: 1px solid #e08d13;
  color: #b97410;
}

.card-inverse-danger {
  background: rgba(220, 53, 69, 0.2);
  border: 1px solid #ca313f;
  color: #a72834;
}

.card-inverse-light {
  background: rgba(248, 249, 250, 0.2);
  border: 1px solid #e4e5e6;
  color: #bcbdbe;
}

.card-inverse-dark {
  background: rgba(40, 47, 58, 0.2);
  border: 1px solid #252b35;
  color: #1e242c;
}

/* Checkboxes and Radios */
.form-check {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 0;
}

.form-check .form-check-label {
  min-height: 18px;
  display: block;
  margin-left: 1.75rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.rtl .form-check .form-check-label {
  margin-left: 0;
  margin-right: 1.75rem;
}

.form-check .form-check-label input {
  position: absolute;
  top: 0;
  left: 0;
  margin-left: 0;
  margin-top: 0;
  z-index: 1;
  cursor: pointer;
  opacity: 0;
  filter: alpha(opacity=0);
}

.rtl .form-check .form-check-label input {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before, .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  position: absolute;
  top: 0;
  left: 0;
}

.rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:before {
  content: "";
  width: 18px;
  height: 18px;
  border-radius: 2px;
  border: solid #844fc1;
  border-width: 2px;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.form-check .form-check-label input[type="checkbox"] + .input-helper:after {
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  font-family: 'typicons';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  content: '\e11e';
  font-size: .9375rem;
  font-weight: bold;
  color: #ffffff;
  margin-left: 3px;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
  background: #844fc1;
  border-width: 0;
}

.form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
  width: 18px;
  opacity: 1;
  line-height: 18px;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
  border-color: #f3f3f3;
}

.form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
  background: #f3f3f3;
  color: #ffffff;
}

.form-check .form-check-label input[type="radio"] + .input-helper:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  border: solid #844fc1;
  border-width: 2px;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  -webkit-transition: all;
  -moz-transition: all;
  -ms-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:before {
  left: auto;
  right: 0;
}

.form-check .form-check-label input[type="radio"] + .input-helper:after {
  content: "";
  width: 8px;
  height: 8px;
  background: #ffffff;
  border-radius: 50%;
  top: 6px;
  left: 6px;
  -webkit-transition: all;
  -o-transition: all;
  transition: all;
  transition-duration: 0s;
  -webkit-transition-duration: 250ms;
  transition-duration: 250ms;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  transform: scale(0);
  position: absolute;
}

.rtl .form-check .form-check-label input[type="radio"] + .input-helper:after {
  left: auto;
  right: 6px;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
  background: #844fc1;
  border-width: 0;
}

.form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
  opacity: 1;
  line-height: 1.5;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}

.form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
  border-color: #f3f3f3;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
  background: #f3f3f3;
}

.form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
  background: #ffffff;
}

.form-check-primary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-primary.form-check label input[type="radio"] + .input-helper:before {
  border-color: #844fc1;
}

.form-check-primary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-primary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #844fc1;
}

.form-check-secondary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"] + .input-helper:before {
  border-color: #6c7293;
}

.form-check-secondary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #6c7293;
}

.form-check-success.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-success.form-check label input[type="radio"] + .input-helper:before {
  border-color: #21bf06;
}

.form-check-success.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-success.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #21bf06;
}

.form-check-info.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-info.form-check label input[type="radio"] + .input-helper:before {
  border-color: #3b86d1;
}

.form-check-info.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-info.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #3b86d1;
}

.form-check-warning.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-warning.form-check label input[type="radio"] + .input-helper:before {
  border-color: #f39915;
}

.form-check-warning.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-warning.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #f39915;
}

.form-check-danger.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-danger.form-check label input[type="radio"] + .input-helper:before {
  border-color: #dc3545;
}

.form-check-danger.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-danger.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #dc3545;
}

.form-check-light.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-light.form-check label input[type="radio"] + .input-helper:before {
  border-color: #f8f9fa;
}

.form-check-light.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-light.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #f8f9fa;
}

.form-check-dark.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-dark.form-check label input[type="radio"] + .input-helper:before {
  border-color: #282f3a;
}

.form-check-dark.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-dark.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #282f3a;
}

/* Dropdowns */
.dropdown .dropdown-toggle:after {
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  font: normal normal normal 24px/1 "typicons";
  content: "\e01d";
  width: auto;
  height: auto;
  vertical-align: middle;
  line-height: .625rem;
  font-size: 1.25rem;
  margin-left: 0.312rem;
}

.dropdown .dropdown-menu {
  margin-top: 0;
  font-size: 0.875rem;
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  border-radius: 0;
}

.dropdown .dropdown-menu .dropdown-item {
  font-size: .875rem;
  padding: .25rem 1.5rem;
}

.dropdown .dropdown-menu .dropdown-item:active {
  background: initial;
}

/* Forms */
.form-group {
  margin-bottom: 1.5rem;
}

.input-group-append,
.input-group-prepend {
  color: #c9c8c8;
  width: auto;
  border: none;
}

.input-group-append .input-group-text,
.input-group-prepend .input-group-text {
  border-color: #f3f3f3;
  padding: 0.875rem 0.75rem;
  color: #c9c8c8;
}

.form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  border: 1px solid #f3f3f3;
  font-weight: 400;
  font-size: 0.875rem;
}

select.form-control, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead,
select.tt-query,
select.tt-hint {
  padding: .4375rem .75rem;
  border: 0;
  outline: 1px solid #f3f3f3;
  color: #c9c8c8;
}

select.form-control:focus, .select2-container--default select.select2-selection--single:focus, .select2-container--default .select2-selection--single select.select2-search__field:focus, select.typeahead:focus,
select.tt-query:focus,
select.tt-hint:focus {
  outline: 1px solid #f3f3f3;
}

select.form-control.border-primary, .select2-container--default select.border-primary.select2-selection--single, .select2-container--default .select2-selection--single select.border-primary.select2-search__field, select.border-primary.typeahead,
select.border-primary.tt-query,
select.border-primary.tt-hint {
  outline: 1px solid #844fc1;
}

select.form-control.border-primary:focus, .select2-container--default select.border-primary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-primary.select2-search__field:focus, select.border-primary.typeahead:focus,
select.border-primary.tt-query:focus,
select.border-primary.tt-hint:focus {
  outline: 1px solid #844fc1;
}

select.form-control.border-secondary, select.form-control.loader-demo-box, .select2-container--default select.loader-demo-box.select2-selection--single, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field, select.loader-demo-box.typeahead,
select.loader-demo-box.tt-query,
select.loader-demo-box.tt-hint, .select2-container--default select.border-secondary.select2-selection--single, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field, select.border-secondary.typeahead,
select.border-secondary.tt-query,
select.border-secondary.tt-hint {
  outline: 1px solid #6c7293;
}

select.form-control.border-secondary:focus, select.form-control.loader-demo-box:focus, .select2-container--default select.loader-demo-box.select2-selection--single:focus, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field:focus, select.loader-demo-box.typeahead:focus,
select.loader-demo-box.tt-query:focus,
select.loader-demo-box.tt-hint:focus, .select2-container--default select.border-secondary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field:focus, select.border-secondary.typeahead:focus,
select.border-secondary.tt-query:focus,
select.border-secondary.tt-hint:focus {
  outline: 1px solid #6c7293;
}

select.form-control.border-success, .select2-container--default select.border-success.select2-selection--single, .select2-container--default .select2-selection--single select.border-success.select2-search__field, select.border-success.typeahead,
select.border-success.tt-query,
select.border-success.tt-hint {
  outline: 1px solid #21bf06;
}

select.form-control.border-success:focus, .select2-container--default select.border-success.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-success.select2-search__field:focus, select.border-success.typeahead:focus,
select.border-success.tt-query:focus,
select.border-success.tt-hint:focus {
  outline: 1px solid #21bf06;
}

select.form-control.border-info, .select2-container--default select.border-info.select2-selection--single, .select2-container--default .select2-selection--single select.border-info.select2-search__field, select.border-info.typeahead,
select.border-info.tt-query,
select.border-info.tt-hint {
  outline: 1px solid #3b86d1;
}

select.form-control.border-info:focus, .select2-container--default select.border-info.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-info.select2-search__field:focus, select.border-info.typeahead:focus,
select.border-info.tt-query:focus,
select.border-info.tt-hint:focus {
  outline: 1px solid #3b86d1;
}

select.form-control.border-warning, .select2-container--default select.border-warning.select2-selection--single, .select2-container--default .select2-selection--single select.border-warning.select2-search__field, select.border-warning.typeahead,
select.border-warning.tt-query,
select.border-warning.tt-hint {
  outline: 1px solid #f39915;
}

select.form-control.border-warning:focus, .select2-container--default select.border-warning.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-warning.select2-search__field:focus, select.border-warning.typeahead:focus,
select.border-warning.tt-query:focus,
select.border-warning.tt-hint:focus {
  outline: 1px solid #f39915;
}

select.form-control.border-danger, .select2-container--default select.border-danger.select2-selection--single, .select2-container--default .select2-selection--single select.border-danger.select2-search__field, select.border-danger.typeahead,
select.border-danger.tt-query,
select.border-danger.tt-hint {
  outline: 1px solid #dc3545;
}

select.form-control.border-danger:focus, .select2-container--default select.border-danger.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-danger.select2-search__field:focus, select.border-danger.typeahead:focus,
select.border-danger.tt-query:focus,
select.border-danger.tt-hint:focus {
  outline: 1px solid #dc3545;
}

select.form-control.border-light, .select2-container--default select.border-light.select2-selection--single, .select2-container--default .select2-selection--single select.border-light.select2-search__field, select.border-light.typeahead,
select.border-light.tt-query,
select.border-light.tt-hint {
  outline: 1px solid #f8f9fa;
}

select.form-control.border-light:focus, .select2-container--default select.border-light.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-light.select2-search__field:focus, select.border-light.typeahead:focus,
select.border-light.tt-query:focus,
select.border-light.tt-hint:focus {
  outline: 1px solid #f8f9fa;
}

select.form-control.border-dark, .select2-container--default select.border-dark.select2-selection--single, .select2-container--default .select2-selection--single select.border-dark.select2-search__field, select.border-dark.typeahead,
select.border-dark.tt-query,
select.border-dark.tt-hint {
  outline: 1px solid #282f3a;
}

select.form-control.border-dark:focus, .select2-container--default select.border-dark.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-dark.select2-search__field:focus, select.border-dark.typeahead:focus,
select.border-dark.tt-query:focus,
select.border-dark.tt-hint:focus {
  outline: 1px solid #282f3a;
}

.form-group label {
  font-size: 0.875rem;
  line-height: 1.4rem;
  vertical-align: top;
  margin-bottom: .5rem;
}

.form-group.has-danger .form-control, .form-group.has-danger .select2-container--default .select2-selection--single, .select2-container--default .form-group.has-danger .select2-selection--single, .form-group.has-danger .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-group.has-danger .select2-search__field, .form-group.has-danger .typeahead,
.form-group.has-danger .tt-query,
.form-group.has-danger .tt-hint {
  border-color: #dc3545;
}

.form-group .file-upload-default {
  visibility: hidden;
  position: absolute;
}

.form-group .file-upload-info {
  background: transparent;
}

/* Icons */
.icons-list {
  border-left: 1px solid #f3f3f3;
  border-top: 1px solid #f3f3f3;
}

.icons-list > div {
  background: #ffffff;
  border-bottom: 1px solid #f3f3f3;
  border-right: 1px solid #f3f3f3;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  padding: 15px 15px;
  font-weight: 400;
  font-size: 0.875rem;
}

.icons-list > div i {
  display: inline-block;
  font-size: 20px;
  width: 40px;
  text-align: left;
  color: #844fc1;
}

.icon-in-bg {
  width: 55px;
  height: 55px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.icon-xl {
  font-size: 3.2rem;
}

.icon-lg {
  font-size: 2.5rem;
}

.icon-md {
  font-size: 1.875rem;
}

.icon-sm {
  font-size: 1rem;
}

/* Loaders */
#pgloading {
  position: static;
}

#pgloading .bokeh {
  font-size: 100px;
  width: 1em;
  height: 1em;
  position: relative;
  margin: 0 auto;
  border-radius: 50%;
  border: 0.01em solid #f3f3f3;
  list-style: none;
  padding: 0;
}

#pgloading .bokeh li {
  position: absolute;
  width: .2em;
  height: .2em;
  border-radius: 50%;
}

#pgloading .bokeh li:nth-child(1) {
  left: 50%;
  top: 0;
  margin: 0 0 0 -.1em;
  background: #21bf06;
  -webkit-transform-origin: 50% 250%;
  transform-origin: 50% 250%;
  -webkit-animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
  animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(2) {
  top: 50%;
  right: 0;
  margin: -.1em 0 0 0;
  background: #dc3545;
  -webkit-transform-origin: -150% 50%;
  transform-origin: -150% 50%;
  -webkit-animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
  animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(3) {
  left: 50%;
  bottom: 0;
  margin: 0 0 0 -.1em;
  background: #f39915;
  -webkit-transform-origin: 50% -150%;
  transform-origin: 50% -150%;
  -webkit-animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
  animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
}

#pgloading .bokeh li:nth-child(4) {
  top: 50%;
  left: 0;
  margin: -.1em 0 0 0;
  background: #844fc1;
  -webkit-transform-origin: 250% 50%;
  transform-origin: 250% 50%;
  -webkit-animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
  animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
}

@-webkit-keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes rota {
  from {
  }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@-webkit-keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

@keyframes opa {
  0% {
  }
  12.0% {
    opacity: 0.80;
  }
  19.5% {
    opacity: 0.88;
  }
  37.2% {
    opacity: 0.64;
  }
  40.5% {
    opacity: 0.52;
  }
  52.7% {
    opacity: 0.69;
  }
  60.2% {
    opacity: 0.60;
  }
  66.6% {
    opacity: 0.52;
  }
  70.0% {
    opacity: 0.63;
  }
  79.9% {
    opacity: 0.60;
  }
  84.2% {
    opacity: 0.75;
  }
  91.0% {
    opacity: 0.87;
  }
}

.glowing-loader {
  position: relative;
}

.s2 {
  position: absolute;
  height: 70px;
  width: 70px;
  top: 50px;
  background-color: transparent;
  left: 50%;
  transform: translate(-50%, -50%);
}

.s1 {
  position: absolute;
  height: 70px;
  width: 70px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(45deg);
  background-color: transparent;
}

.bigcon {
  position: absolute;
  height: 75px;
  width: 75px;
  left: 50%;
  top: 50px;
  transform-origin: center;
  transform: translate(-50%, -50%) rotate(-45deg);
  background-color: transparent;
  animation: bigcon 2s infinite linear;
  animation-delay: 0.25s;
}

.b {
  border-radius: 50%;
  position: absolute;
}

.s {
  width: 15px;
  height: 15px;
  animation: small 2s infinite ease;
  box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  background-color: #844fc1;
}

.s:nth-child(1) {
  top: 0%;
  left: 0%;
}

.s:nth-child(2) {
  top: 0%;
  right: 0%;
}

.s:nth-child(3) {
  right: 0%;
  bottom: 0%;
}

.s:nth-child(4) {
  bottom: 0%;
  left: 0%;
}

.big {
  width: 15px;
  height: 15px;
  border-radius: 15px;
  box-shadow: 0px 0px 10px #844fc1, 0px 0px 20px #844fc1, 0px 0px 30px #844fc1, 0px 0px 50px #844fc1, 0px 0px 60px #844fc1;
  z-index: 1;
  background-color: #844fc1;
  animation: bigball 1s infinite linear;
}

.sb1 {
  animation-delay: -1.75s;
}

.sb6 {
  animation-delay: -1.5s;
}

.sb2 {
  animation-delay: -1.25s;
}

.sb7 {
  animation-delay: -1s;
}

.sb3 {
  animation-delay: -0.75s;
}

.sb8 {
  animation-delay: -0.5s;
}

.sb4 {
  animation-delay: -0.25s;
}

.sb5 {
  animation-delay: -0s;
}

@keyframes bigcon {
  0% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(45deg);
  }
  100% {
    transform-origin: center;
    transform: translate(-50%, -50%) rotate(405deg);
  }
}

@keyframes small {
  0% {
    transform: scale(1);
    background-color: #b99adc;
  }
  10% {
    transform: scale(1.3);
    background-color: #844fc1;
  }
  15% {
    transform: scale(1);
  }
  25% {
    transform: scale(1);
    background-color: #844fc1;
  }
  100% {
    transform: scale(1);
    background-color: #844fc1;
  }
}

/* Pixel loader */
.pixel-loader {
  width: 10px;
  height: 10px;
  background: #f39915;
  color: #f39915;
  margin: 80px auto;
  box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  animation: anim 2s linear infinite;
}

@keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg);
  }
  50% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  75% {
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
  }
  100% {
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg);
  }
}

/* Square box loader */
@keyframes dyinglight {
  15% {
    transform: scale(1.6);
  }
  50% {
    transform: rotate(-89deg);
  }
  100% {
    transform: rotate(-90deg);
  }
}

.square-box-loader {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  display: inline-block;
}

.square-box-loader-square {
  display: block;
  width: 30px;
  height: 30px;
  background: #844fc1;
}

.square-box-loader-container {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  transform-origin: 50% 50% 0;
  animation: dyinglight 1s ease infinite;
  backface-visibility: hidden;
}

.square-box-loader-corner-top:before,
.square-box-loader-corner-top:after,
.square-box-loader-corner-bottom:before,
.square-box-loader-corner-bottom:after {
  position: absolute;
  width: 10px;
  height: 10px;
  color: #844fc1;
  content: '';
}

.square-box-loader-corner-top:before {
  border-left: 1px solid;
  border-top: 1px solid;
  top: -4px;
  left: -4px;
}

.square-box-loader-corner-top:after {
  border-right: 1px solid;
  border-top: 1px solid;
  top: -4px;
  right: -4px;
}

.square-box-loader-corner-bottom:before {
  border-left: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  left: -4px;
}

.square-box-loader-corner-bottom:after {
  border-right: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  right: -4px;
}

/* Circle loader */
.circle-loader {
  width: 70px;
  height: 70px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.circle-loader:before, .circle-loader:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: #f39915;
}

.circle-loader:before {
  z-index: 10;
  animation: spin 1s infinite;
}

.circle-loader:after {
  border: 10px solid #6c7293;
}

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

/* Jumping dots loader */
.jumping-dots-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.jumping-dots-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: rgba(220, 53, 69, 0.8);
  margin: 35px 5px;
}

.jumping-dots-loader span:nth-child(1) {
  animation: bounce 1s ease-in-out infinite;
}

.jumping-dots-loader span:nth-child(2) {
  animation: bounce 1s ease-in-out 0.33s infinite;
}

.jumping-dots-loader span:nth-child(3) {
  animation: bounce 1s ease-in-out 0.66s infinite;
}

@keyframes bounce {
  0%, 75%, 100% {
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  25% {
    -webkit-transform: translateY(-20px);
    -ms-transform: translateY(-20px);
    -o-transform: translateY(-20px);
    transform: translateY(-20px);
  }
}

/* Bar loader */
.bar-loader {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.bar-loader span {
  display: inline-block;
  width: 5px;
  height: 30px;
  background-color: rgba(220, 53, 69, 0.7);
}

.bar-loader span:nth-child(1) {
  animation: grow 1s ease-in-out infinite;
}

.bar-loader span:nth-child(2) {
  animation: grow 1s ease-in-out 0.15s infinite;
}

.bar-loader span:nth-child(3) {
  animation: grow 1s ease-in-out 0.30s infinite;
}

.bar-loader span:nth-child(4) {
  animation: grow 1s ease-in-out 0.45s infinite;
}

@keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    -o-transform: scaleY(1);
    transform: scaleY(1);
  }
  50% {
    -webkit-transform: scaleY(1.8);
    -ms-transform: scaleY(1.8);
    -o-transform: scaleY(1.8);
    transform: scaleY(1.8);
  }
}

/* Square path loader */
.square-path-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.square-path-loader:before, .square-path-loader:after {
  content: "";
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: calc(50% - 10px);
  background-color: rgba(33, 191, 6, 0.7);
  animation: squaremove 1s ease-in-out infinite;
}

.square-path-loader:after {
  bottom: 0;
  animation-delay: 0.5s;
}

@keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    -ms-transform: translate(0, 0) rotate(0);
    -o-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0);
  }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    -ms-transform: translate(40px, 40px) rotate(45deg);
    -o-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg);
  }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    -ms-transform: translate(0px, 80px) rotate(0deg);
    -o-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg);
  }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    -ms-transform: translate(-40px, 40px) rotate(45deg);
    -o-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg);
  }
}

/* Dot opacity loader */
.dot-opacity-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.dot-opacity-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: #844fc1;
  margin: 35px 5px;
  opacity: 0;
}

.dot-opacity-loader span:nth-child(1) {
  animation: opacitychange 1s ease-in-out infinite;
}

.dot-opacity-loader span:nth-child(2) {
  animation: opacitychange 1s ease-in-out 0.33s infinite;
}

.dot-opacity-loader span:nth-child(3) {
  animation: opacitychange 1s ease-in-out 0.66s infinite;
}

@keyframes opacitychange {
  0%, 100% {
    opacity: 0;
  }
  60% {
    opacity: 1;
  }
}

/* Flip square */
.flip-square-loader {
  -webkit-perspective: 120px;
  -moz-perspective: 120px;
  -ms-perspective: 120px;
  perspective: 120px;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.flip-square-loader:before {
  content: "";
  position: absolute;
  left: 25px;
  top: 25px;
  width: 50px;
  height: 50px;
  background-color: rgba(33, 191, 6, 0.7);
  animation: flip 1s infinite;
}

@keyframes flip {
  0% {
    transform: rotate(0);
  }
  50% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(180deg) rotateX(180deg);
  }
}

/* Moving square loader */
.moving-square-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto;
}

.moving-square-loader:before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  top: calc(50% - 10px);
  left: 0px;
  background-color: rgba(220, 53, 69, 0.7);
  animation: rotatemove 1s infinite;
}

@keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    -ms-transform: scale(1) translateX(0px);
    -o-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px);
  }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    -ms-transform: scale(2) translateX(45px);
    -o-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px);
  }
}

/* Lists */
ul,
ol,
dl {
  padding-left: 1rem;
  font-size: 0.875rem;
}

ul li,
ol li,
dl li {
  line-height: 1.8;
}

.list-ticked,
.list-arrow,
.list-star {
  list-style: none;
  padding: 0;
}

.list-ticked li,
.list-arrow li,
.list-star li {
  padding-left: 1.5rem;
}

.list-ticked li:before,
.list-arrow li:before,
.list-star li:before {
  font-family: "typicons";
  margin-left: -1.5rem;
  width: 1.5rem;
  margin-right: .5rem;
}

.list-ticked li:before {
  content: '\e11e';
  color: #dc3545;
}

.list-arrow li:before {
  content: '\e049';
  color: #21bf06;
}

.list-star li:before {
  content: '\e109';
  color: #f39915;
}

.solid-bullet-list {
  position: relative;
  padding-left: 0;
}

.rtl .solid-bullet-list {
  padding-right: 0;
}

.solid-bullet-list li {
  position: relative;
  list-style-type: none;
  padding-left: 25px;
  line-height: 1;
  padding-bottom: 2.125rem;
}

.solid-bullet-list li * {
  line-height: .8;
}

.solid-bullet-list li:before, .solid-bullet-list li:after {
  content: "";
  position: absolute;
}

.solid-bullet-list li:before {
  top: 0;
  left: 0;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #844fc1;
  z-index: 1;
}

.solid-bullet-list:after {
  content: "";
  border: 1px solid #f3f3f3;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 4px;
  z-index: 0;
}

.bullet-line-list {
  padding-left: 30px;
  position: relative;
  list-style-type: none;
}

.rtl .bullet-line-list {
  padding-left: unset;
  padding-right: 30px;
}

.bullet-line-list li {
  position: relative;
}

.bullet-line-list li:before {
  width: 15px;
  height: 15px;
  left: -30px;
  top: 0;
  border: 4px solid #844fc1;
  margin-right: 15px;
  z-index: 2;
  background: #ffffff;
}

.rtl .bullet-line-list li:before {
  left: unset;
  right: -45px;
}

.bullet-line-list li:before {
  content: "";
  position: absolute;
  border-radius: 100%;
}

.bullet-line-list:after {
  content: "";
  border: 1px solid #f3f3f3;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 7px;
}

.rtl .bullet-line-list:after {
  left: unset;
  right: 7px;
}

/* Pagination */
.pagination .page-item .page-link {
  border-color: #f3f3f3;
  color: #000000;
  font-size: .875rem;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
}

.pagination .page-item .page-link:focus {
  background: inherit;
}

.pagination .page-item .page-link i:before {
  font-size: inherit;
  line-height: 1;
  vertical-align: middle;
}

.pagination .page-item.active .page-link, .pagination .page-item:hover .page-link, .pagination .page-item:focus .page-link, .pagination .page-item:active .page-link {
  background: #844fc1;
  border-color: #844fc1;
  color: #ffffff;
}

.pagination.pagination-flat .page-item {
  margin: 0 .25rem;
}

.pagination.pagination-flat .page-item .page-link {
  border: none;
  border-radius: 2px;
}

.pagination.pagination-separated .page-item {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-separated .page-item:first-child {
  margin-left: 0;
}

.pagination.pagination-separated .page-item:last-child {
  margin-right: 0;
}

.pagination.pagination-separated .page-item .page-link {
  border-radius: 2px;
}

.pagination.pagination-rounded .page-item:first-child .page-link {
  border-radius: 25px 0 0 25px;
}

.pagination.pagination-rounded .page-item:last-child .page-link {
  border-radius: 0 25px 25px 0;
}

.pagination.pagination-rounded-flat .page-item {
  margin-right: 3px;
  margin-left: 3px;
}

.pagination.pagination-rounded-flat .page-item .page-link {
  border: none;
  border-radius: 50px;
}

.pagination.pagination-rounded-separated .page-item {
  margin-left: 2px;
  margin-right: 2px;
}

.pagination.pagination-rounded-separated .page-item:first-child {
  margin-left: 0;
}

.pagination.pagination-rounded-separated .page-item:first-child .page-link {
  border-radius: 10px 0 0 10px;
}

.pagination.pagination-rounded-separated .page-item:last-child {
  margin-right: 0;
}

.pagination.pagination-rounded-separated .page-item:last-child .page-link {
  border-radius: 0 10px 10px 0;
}

.pagination.pagination-rounded-separated .page-item .page-link {
  border-radius: 2px;
}

/* pagination variations */
.pagination-primary .page-item.active .page-link {
  background: #844fc1;
  border-color: #844fc1;
}

.pagination-primary .page-item:hover .page-link {
  background: #9162c8;
  border-color: #844fc1;
  color: #ffffff;
}

.pagination-secondary .page-item.active .page-link {
  background: #6c7293;
  border-color: #6c7293;
}

.pagination-secondary .page-item:hover .page-link {
  background: #7b809e;
  border-color: #6c7293;
  color: #ffffff;
}

.pagination-success .page-item.active .page-link {
  background: #21bf06;
  border-color: #21bf06;
}

.pagination-success .page-item:hover .page-link {
  background: #25d807;
  border-color: #21bf06;
  color: #ffffff;
}

.pagination-info .page-item.active .page-link {
  background: #3b86d1;
  border-color: #3b86d1;
}

.pagination-info .page-item:hover .page-link {
  background: #5093d6;
  border-color: #3b86d1;
  color: #ffffff;
}

.pagination-warning .page-item.active .page-link {
  background: #f39915;
  border-color: #f39915;
}

.pagination-warning .page-item:hover .page-link {
  background: #f4a42d;
  border-color: #f39915;
  color: #ffffff;
}

.pagination-danger .page-item.active .page-link {
  background: #dc3545;
  border-color: #dc3545;
}

.pagination-danger .page-item:hover .page-link {
  background: #e04b59;
  border-color: #dc3545;
  color: #ffffff;
}

.pagination-light .page-item.active .page-link {
  background: #f8f9fa;
  border-color: #f8f9fa;
}

.pagination-light .page-item:hover .page-link {
  background: white;
  border-color: #f8f9fa;
  color: #ffffff;
}

.pagination-dark .page-item.active .page-link {
  background: #282f3a;
  border-color: #282f3a;
}

.pagination-dark .page-item:hover .page-link {
  background: #323b49;
  border-color: #282f3a;
  color: #ffffff;
}

/* Popovers */
.popover-static-demo .popover {
  width: 185px;
  position: relative;
  display: block;
  float: left;
  margin: 1rem .5rem;
  z-index: 10;
}

.popover-static-demo .popover.bs-popover-bottom-demo .arrow, .popover-static-demo .popover.bs-popover-top-demo .arrow {
  left: 50%;
}

.popover-static-demo .popover.bs-popover-left-demo .arrow, .popover-static-demo .popover.bs-popover-right-demo .arrow {
  top: 50%;
}

.popover {
  z-index: 1029;
}

.popover.bs-popover-top-demo .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-top-demo .arrow:after {
  border-top-color: #fff;
}

.popover.bs-popover-right-demo .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-right-demo .arrow:after {
  border-right-color: #fff;
}

.popover.bs-popover-bottom-demo .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-bottom-demo .arrow:after {
  border-bottom-color: #fff;
}

.popover.bs-popover-bottom-demo .popover-header:before {
  border-bottom: 0;
}

.popover.bs-popover-left-demo .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.bs-popover-left-demo .arrow:after {
  border-left-color: #fff;
}

.popover .popover-header {
  font-size: .9375rem;
  border-bottom: 0;
  background: #ffffff;
  color: inherit;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}

.popover .popover-body {
  color: #a5abcc;
}

.popover.left .arrow:before {
  border-left-color: rgba(0, 0, 0, 0.2);
}

.popover.left .arrow:after {
  border-left-color: #fff;
}

.popover.right .arrow:before {
  border-right-color: rgba(0, 0, 0, 0.2);
}

.popover.right .arrow:after {
  border-right-color: #fff;
}

.popover.top .arrow:before {
  border-top-color: rgba(0, 0, 0, 0.2);
}

.popover.top .arrow:after {
  border-top-color: #fff;
}

.popover.bottom .arrow:before {
  border-bottom-color: rgba(0, 0, 0, 0.2);
}

.popover.bottom .arrow:after {
  border-bottom-color: #fff;
}

.popover-primary {
  border-color: "primary";
}

.popover-primary .popover-header {
  background: #844fc1;
  color: #ffffff;
  border-bottom: 0;
}

.popover-primary.bs-popover-top .arrow:before, .popover-primary.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-primary.bs-popover-top .arrow:after, .popover-primary.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #844fc1;
}

.popover-primary.bs-popover-right .arrow:before, .popover-primary.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-primary.bs-popover-right .arrow:after, .popover-primary.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #844fc1;
}

.popover-primary.bs-popover-bottom .arrow:before, .popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-primary.bs-popover-bottom .arrow:after, .popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #844fc1;
}

.popover-primary.bs-popover-left .arrow:before, .popover-primary.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-primary.bs-popover-left .arrow:after, .popover-primary.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #844fc1;
}

.popover-secondary {
  border-color: "secondary";
}

.popover-secondary .popover-header {
  background: #6c7293;
  color: #ffffff;
  border-bottom: 0;
}

.popover-secondary.bs-popover-top .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-secondary.bs-popover-top .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #6c7293;
}

.popover-secondary.bs-popover-right .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-secondary.bs-popover-right .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #6c7293;
}

.popover-secondary.bs-popover-bottom .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-secondary.bs-popover-bottom .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #6c7293;
}

.popover-secondary.bs-popover-left .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-secondary.bs-popover-left .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #6c7293;
}

.popover-success {
  border-color: "success";
}

.popover-success .popover-header {
  background: #21bf06;
  color: #ffffff;
  border-bottom: 0;
}

.popover-success.bs-popover-top .arrow:before, .popover-success.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-success.bs-popover-top .arrow:after, .popover-success.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #21bf06;
}

.popover-success.bs-popover-right .arrow:before, .popover-success.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-success.bs-popover-right .arrow:after, .popover-success.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #21bf06;
}

.popover-success.bs-popover-bottom .arrow:before, .popover-success.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-success.bs-popover-bottom .arrow:after, .popover-success.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #21bf06;
}

.popover-success.bs-popover-left .arrow:before, .popover-success.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-success.bs-popover-left .arrow:after, .popover-success.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #21bf06;
}

.popover-info {
  border-color: "info";
}

.popover-info .popover-header {
  background: #3b86d1;
  color: #ffffff;
  border-bottom: 0;
}

.popover-info.bs-popover-top .arrow:before, .popover-info.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-info.bs-popover-top .arrow:after, .popover-info.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #3b86d1;
}

.popover-info.bs-popover-right .arrow:before, .popover-info.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-info.bs-popover-right .arrow:after, .popover-info.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #3b86d1;
}

.popover-info.bs-popover-bottom .arrow:before, .popover-info.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-info.bs-popover-bottom .arrow:after, .popover-info.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #3b86d1;
}

.popover-info.bs-popover-left .arrow:before, .popover-info.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-info.bs-popover-left .arrow:after, .popover-info.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #3b86d1;
}

.popover-warning {
  border-color: "warning";
}

.popover-warning .popover-header {
  background: #f39915;
  color: #ffffff;
  border-bottom: 0;
}

.popover-warning.bs-popover-top .arrow:before, .popover-warning.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-warning.bs-popover-top .arrow:after, .popover-warning.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #f39915;
}

.popover-warning.bs-popover-right .arrow:before, .popover-warning.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-warning.bs-popover-right .arrow:after, .popover-warning.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #f39915;
}

.popover-warning.bs-popover-bottom .arrow:before, .popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-warning.bs-popover-bottom .arrow:after, .popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #f39915;
}

.popover-warning.bs-popover-left .arrow:before, .popover-warning.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-warning.bs-popover-left .arrow:after, .popover-warning.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #f39915;
}

.popover-danger {
  border-color: "danger";
}

.popover-danger .popover-header {
  background: #dc3545;
  color: #ffffff;
  border-bottom: 0;
}

.popover-danger.bs-popover-top .arrow:before, .popover-danger.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-danger.bs-popover-top .arrow:after, .popover-danger.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #dc3545;
}

.popover-danger.bs-popover-right .arrow:before, .popover-danger.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-danger.bs-popover-right .arrow:after, .popover-danger.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #dc3545;
}

.popover-danger.bs-popover-bottom .arrow:before, .popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-danger.bs-popover-bottom .arrow:after, .popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #dc3545;
}

.popover-danger.bs-popover-left .arrow:before, .popover-danger.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-danger.bs-popover-left .arrow:after, .popover-danger.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #dc3545;
}

.popover-light {
  border-color: "light";
}

.popover-light .popover-header {
  background: #f8f9fa;
  color: #ffffff;
  border-bottom: 0;
}

.popover-light.bs-popover-top .arrow:before, .popover-light.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-light.bs-popover-top .arrow:after, .popover-light.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #f8f9fa;
}

.popover-light.bs-popover-right .arrow:before, .popover-light.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-light.bs-popover-right .arrow:after, .popover-light.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #f8f9fa;
}

.popover-light.bs-popover-bottom .arrow:before, .popover-light.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-light.bs-popover-bottom .arrow:after, .popover-light.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #f8f9fa;
}

.popover-light.bs-popover-left .arrow:before, .popover-light.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-light.bs-popover-left .arrow:after, .popover-light.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #f8f9fa;
}

.popover-dark {
  border-color: "dark";
}

.popover-dark .popover-header {
  background: #282f3a;
  color: #ffffff;
  border-bottom: 0;
}

.popover-dark.bs-popover-top .arrow:before, .popover-dark.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-dark.bs-popover-top .arrow:after, .popover-dark.bs-popover-auto[x-placement^="top"] .arrow:after {
  border-top-color: #282f3a;
}

.popover-dark.bs-popover-right .arrow:before, .popover-dark.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-dark.bs-popover-right .arrow:after, .popover-dark.bs-popover-auto[x-placement^="right"] .arrow:after {
  border-right-color: #282f3a;
}

.popover-dark.bs-popover-bottom .arrow:before, .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-dark.bs-popover-bottom .arrow:after, .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow:after {
  border-bottom-color: #282f3a;
}

.popover-dark.bs-popover-left .arrow:before, .popover-dark.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-dark.bs-popover-left .arrow:after, .popover-dark.bs-popover-auto[x-placement^="left"] .arrow:after {
  border-left-color: #282f3a;
}

/* Portfolio */
.portfolio-grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  background: #844fc1;
  text-align: center;
  cursor: pointer;
}

.portfolio-grid figure img {
  position: relative;
  display: block;
  min-height: 100%;
  max-width: 100%;
  width: 100%;
  opacity: 0.8;
}

.portfolio-grid figure figcaption {
  padding: 2em;
  color: #ffffff;
  text-transform: uppercase;
  font-size: 1.25em;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.portfolio-grid figure figcaption:after, .portfolio-grid figure figcaption:before {
  pointer-events: none;
}

.portfolio-grid figure.effect-text-in {
  border-radius: 0.25rem;
}

.portfolio-grid figure.effect-text-in h4,
.portfolio-grid figure.effect-text-in img {
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
}

.portfolio-grid figure.effect-text-in img {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.portfolio-grid figure.effect-text-in h4,
.portfolio-grid figure.effect-text-in p {
  position: absolute;
  bottom: 10px;
  left: 0;
  padding: 10px;
  margin-bottom: 0;
  width: 100%;
}

.portfolio-grid figure.effect-text-in p {
  text-transform: none;
  opacity: 0;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0, 50px, 0);
  transform: translate3d(0, 50px, 0);
}

.portfolio-grid figure.effect-text-in:hover img {
  -webkit-transform: translate3d(0, -80px, 0);
  transform: translate3d(0, -80px, 0);
}

.portfolio-grid figure.effect-text-in:hover h4 {
  -webkit-transform: translate3d(0, -100px, 0);
  transform: translate3d(0, -100px, 0);
}

.portfolio-grid figure.effect-text-in:hover p {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

/* Preview */
.preview-list .preview-item {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-align-items: flex-start;
  align-items: flex-start;
  padding: 1.25rem 0;
}

.preview-list .preview-item:last-child {
  border-bottom: 0;
}

.preview-list .preview-item .form-check {
  margin-top: 8px;
  margin-right: 1rem;
}

.preview-list .preview-item .preview-thumbnail {
  color: #ffffff;
  position: relative;
}

.preview-list .preview-item .preview-thumbnail img,
.preview-list .preview-item .preview-thumbnail .preview-icon {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.preview-list .preview-item .preview-thumbnail .preview-icon {
  padding: 6px;
  text-align: center;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.preview-list .preview-item .preview-thumbnail .preview-icon i {
  font-size: 1.125rem;
  margin: 0;
}

.preview-list .preview-item .preview-thumbnail .badge {
  border: 2px solid #ffffff;
  border-radius: 100%;
  bottom: 5px;
  display: block;
  height: 14px;
  left: -5px;
  padding: 0;
  position: absolute;
  width: 14px;
}

.preview-list .preview-item .preview-item-content {
  line-height: 1;
  padding-left: 15px;
}

.preview-list .preview-item .preview-item-content:first-child {
  padding-left: 0;
}

.preview-list .preview-item .preview-item-content p {
  margin-bottom: 10px;
}

.preview-list .preview-item .preview-item-content p .content-category {
  font-family: 'source-sans-pro-semibold', sans-serif;
  padding-right: 15px;
  border-right: 1px solid #f3f3f3;
}

.rtl .preview-list .preview-item .preview-item-content {
  padding-left: 0;
  padding-right: 1rem;
  margin-right: 0;
  margin-left: auto;
}

.preview-list .preview-item .preview-actions {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
}

.preview-list .preview-item .preview-actions i {
  width: 29px;
  color: #e6e9ed;
  height: 29px;
  border: 2px solid #e6e9ed;
  border-radius: 100%;
  padding: 3px 6px;
  display: inline-block;
}

.preview-list .preview-item .preview-actions i:first-child {
  margin-right: 10px;
}

.preview-list.comment-preview .preview-item {
  padding: .87rem 0;
}

.preview-list.comment-preview .preview-item:first-child {
  padding-top: 0;
}

.preview-list.comment-preview .preview-item p {
  line-height: 27px;
}

.preview-list.bordered .preview-item {
  border-bottom: 1px solid #f3f3f3;
}

.preview-list.bordered .preview-item:last-child {
  border-bottom: 0;
}

/* Tables */
.table {
  margin-bottom: 0;
}

.table thead th {
  border-top: 0;
  border-bottom-width: 1px;
  font-weight: 500;
  font-size: 1rem;
}

.table thead th i {
  margin-left: 0.325rem;
}

.table th,
.table td {
  vertical-align: middle;
  line-height: 1;
  white-space: nowrap;
}

.table td {
  font-size: 0.875rem;
}

.table td img {
  width: 36px;
  height: 36px;
  border-radius: 100%;
}

.table td .badge {
  margin-bottom: 0;
}

.table.table-borderless {
  border: none;
}

.table.table-borderless tr,
.table.table-borderless td,
.table.table-borderless th {
  border: none;
}

.table.table-bordered {
  border-top: 1px solid #f3f3f3;
}

/* Toggle Switch */
.toggle-switch {
  position: relative;
  display: inline-block;
  width: 48px;
  height: 25px;
}

.toggle-switch .toggle-slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #e9ecef;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 34px;
  border: 1px solid #f3f3f3;
}

.toggle-switch .toggle-slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 4px;
  bottom: 4px;
  background-color: #ffffff;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

.toggle-switch input {
  visibility: hidden;
}

.toggle-switch input:checked + .toggle-slider {
  background-color: #844fc1;
}

.toggle-switch input:checked + .toggle-slider:before {
  -webkit-transform: translateX(23px);
  -ms-transform: translateX(23px);
  transform: translateX(23px);
}

.toggle-switch.toggle-switch-primary input:checked + .toggle-slider {
  background-color: #844fc1;
}

.toggle-switch.toggle-switch-secondary input:checked + .toggle-slider {
  background-color: #6c7293;
}

.toggle-switch.toggle-switch-success input:checked + .toggle-slider {
  background-color: #21bf06;
}

.toggle-switch.toggle-switch-info input:checked + .toggle-slider {
  background-color: #3b86d1;
}

.toggle-switch.toggle-switch-warning input:checked + .toggle-slider {
  background-color: #f39915;
}

.toggle-switch.toggle-switch-danger input:checked + .toggle-slider {
  background-color: #dc3545;
}

.toggle-switch.toggle-switch-light input:checked + .toggle-slider {
  background-color: #f8f9fa;
}

.toggle-switch.toggle-switch-dark input:checked + .toggle-slider {
  background-color: #282f3a;
}

/* Rounded sliders */
/*-------------------------------------------------------------------*/
/* === Plugin overrides === */
/* Ace Editor */
.ace_editor {
  margin: auto;
  height: 300px;
  width: 100%;
  font: 14px/normal SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

.ace_editor .ace_content {
  font-size: 0.875rem;
}

/* Avgrund Popup */
.avgrund-popin {
  position: fixed;
  background: #fff;
  padding: 37px 33px;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 50%;
  left: 53%;
  z-index: 1000;
  font-size: 0.875rem;
  font-weight: 400;
  font-weight: initial;
  line-height: 1.85;
  border-radius: 10px;
  -webkit-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -ms-transform: scale(0.8);
  -o-transform: scale(0.8);
  transform: scale(0.8);
}

.avgrund-popin p {
  font-size: 0.875rem;
  font-weight: 400;
  font-weight: initial;
}

.avgrund-overlay {
  background: #000;
  width: 100%;
  position: fixed;
  top: 0px;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 101;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
}

body.avgrund-ready,
.avgrund-ready .avgrund-popin,
.avgrund-ready .avgrund-overlay {
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transition: 0.3s all ease-out;
  -moz-transition: 0.3s all ease-out;
  -ms-transition: 0.3s all ease-out;
  -o-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out;
}

body.avgrund-active {
  overflow: hidden;
}

.avgrund-active .avgrund-popin {
  visibility: visible;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

@media (max-width: 767px) {
  .avgrund-active .avgrund-popin {
    -webkit-transform: scale(0.8);
    -moz-transform: scale(0.8);
    -ms-transform: scale(0.8);
    -o-transform: scale(0.8);
    transform: scale(0.8);
  }
}

.avgrund-active .avgrund-overlay {
  visibility: visible;
  opacity: .5;
  filter: alpha(opacity=50);
  height: 20000px;
}

.avgrund-popin.stack {
  -webkit-transform: scale(1.5);
  -moz-transform: scale(1.5);
  -ms-transform: scale(1.5);
  -o-transform: scale(1.5);
  transform: scale(1.5);
}

.avgrund-active .avgrund-popin.stack {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  -ms-transform: scale(1.1);
  -o-transform: scale(1.1);
  transform: scale(1.1);
}

/* Optional close button styles */
.avgrund-close {
  display: block;
  color: #fff;
  background: #001737;
  font-size: 10px;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  top: 10px;
  right: 10px;
  height: 17px;
  width: 17px;
  text-align: center;
  line-height: 16px;
  border-radius: 50px;
}

.avgrund-close:hover {
  color: #fff;
  text-decoration: none;
}

/* CodeMirror */
.CodeMirror {
  font-family: inherit;
  font-size: 0.875rem;
  height: auto;
  text-align: left;
  min-height: auto;
}

.CodeMirror-scroll {
  min-height: auto;
}

/* Jquery File Upload */
.ajax-upload-dragdrop {
  border-color: #f3f3f3;
  border-style: dotted;
  max-width: 100%;
}

.ajax-upload-dragdrop span b {
  font-size: .8125rem;
  color: #001737;
  font-weight: initial;
}

.ajax-upload-dragdrop .ajax-file-upload {
  background: #3b86d1;
  box-shadow: none;
  height: auto;
}

.ajax-file-upload-container {
  min-height: 100px;
}

.ajax-file-upload-container .ajax-file-upload-statusbar {
  max-width: 100%;
}

.ajax-file-upload-container .ajax-file-upload-filename {
  max-width: 100%;
}

.ajax-file-upload-container .ajax-file-upload-error {
  color: #dc3545;
}

/* Pws-tabs */
.pws_tabs_container ul.pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li:last-child a {
  border-right: 1px solid #844fc1;
  border-radius: 0px 5px 0px 0px;
}

.pws_tabs_container ul.pws_tabs_controll li a {
  border: 1px solid #844fc1;
  border-bottom: none;
  border-right: none;
  background: #fff;
  color: #844fc1;
  padding: 0.6em 1.3em;
  margin-right: 0;
}

.pws_tabs_container ul.pws_tabs_controll li a:hover {
  background: #fff;
  color: #844fc1;
}

.pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
  background: #844fc1;
  color: #fff;
}

.pws_tabs_container .demo-tabs {
  border: 1px solid #844fc1;
  border-radius: 0px 5px 5px 5px;
  overflow: hidden;
  margin-bottom: 45px;
  padding-top: 3.5rem;
}

.pws_tabs_container .demo-tabs .CodeMirror {
  margin-bottom: 20px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll {
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:first-child a {
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:last-child a {
  border-bottom: 1px solid #844fc1;
  border-radius: 0px 0px 0px 5px;
  border-right: 0px;
}

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #844fc1;
  border-right: none;
  border-bottom: none;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_list {
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll {
  border-top: 1px solid #844fc1;
  border-right: none;
  border-bottom: none;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:first-child a {
  border-radius: 0px 0px 0px 5px;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:last-child a {
  border-radius: 0px 0px 5px 0px;
  border-right: 1px solid #844fc1;
}

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li a {
  border-radius: 0px;
  border: 1px solid #844fc1;
  border-top: none;
  border-right: none;
  margin-right: 0;
  margin-bottom: 0;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:first-child a {
  border-radius: 0px 5px 0px 0px;
  border-right: 1px solid #844fc1;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:last-child a {
  border-right: none;
  border-radius: 5px 0px 0px 0px;
}

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li a {
  border: 1px solid #844fc1;
  border-bottom: none;
  border-right: none;
  margin-right: 0;
  margin-left: 0;
}

/* Quill Editor */
.quill-container {
  height: 300px;
}

.ql-toolbar.ql-snow,
.quill-container.ql-snow {
  border-color: #f3f3f3;
}

/* Select2 */
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background: #844fc1;
}

.select2-container--default .select2-selection--single,
.select2-container--default .select2-dropdown,
.select2-container--default .select2-selection--multiple {
  border-color: #f3f3f3;
}

.select2-container--default .select2-selection--single .select2-search__field,
.select2-container--default .select2-dropdown .select2-search__field,
.select2-container--default .select2-selection--multiple .select2-search__field {
  border-color: #f3f3f3;
}

.select2-container--default .select2-selection--single {
  height: auto;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
  line-height: 14px;
}

.select2-container--default .select2-dropdown {
  font-size: .8125rem;
}

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #f3f3f3;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  color: #ffffff;
  border: 0;
  border-radius: 3px;
  padding: 6px;
  font-size: .625rem;
  font-family: inherit;
  line-height: 1;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
  color: #ffffff;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+1) {
  background: #844fc1;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+2) {
  background: #21bf06;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+3) {
  background: #3b86d1;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+4) {
  background: #dc3545;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+5) {
  background: #f39915;
}

/* Tags */
div.tagsinput {
  padding: 15px 15px 10px;
  border-color: #f3f3f3;
}

div.tagsinput span.tag {
  background: #844fc1;
  border: 0;
  color: #ffffff;
  padding: 6px 14px;
  font-size: .8125rem;
  font-family: inherit;
  line-height: 1;
}

div.tagsinput span.tag a {
  color: #ffffff;
}

/* TinyMCE Editor */
.mce-tinymce.mce-panel,
.mce-tinymce .mce-panel {
  border-color: #f3f3f3;
}

/* Typeahead */
.tt-menu,
.gist {
  text-align: left;
}

.twitter-typeahead {
  max-width: 100%;
}

.typeahead {
  background-color: #ffffff;
}

.typeahead:focus {
  border-color: #f3f3f3;
}

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}

.tt-hint {
  color: #434a54;
}

.tt-menu {
  width: 100%;
  margin: 12px 0;
  padding: 8px 0;
  background-color: #ffffff;
  border: 1px solid #f3f3f3;
  -webkit-border-radius: 8px;
  -moz-border-radius: 8px;
  border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.tt-suggestion {
  padding: 3px 20px;
  font-size: inherit;
}

.tt-suggestion:hover {
  cursor: pointer;
  color: #ffffff;
  background-color: #844fc1;
}

.tt-suggestion .tt-cursor {
  color: #ffffff;
  background-color: #844fc1;
}

.tt-suggestion p {
  margin: 0;
}

/* X-editable */
.editable-form .editable {
  color: #001737;
  font-size: .8125rem;
}

.editable-form .editable-click {
  border-color: #001737;
}

.editable-container.editable-inline {
  max-width: 100%;
}

.editable-container.editable-inline .editableform {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group {
  max-width: 100%;
  white-space: initial;
}

.editable-container.editable-inline .editableform .control-group > div {
  max-width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input input,
.editable-container.editable-inline .editableform .control-group .editable-input textarea {
  max-width: 100%;
  width: 100%;
}

.editable-container.editable-inline .editableform .control-group .editable-input .combodate .form-control, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single, .select2-container--default .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-selection--single, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-search__field, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .typeahead,
.editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-query,
.editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-hint {
  padding-left: 0;
  padding-right: 0;
}

@media (max-width: 991px) {
  .editable-container.editable-inline .editableform .control-group .editable-buttons {
    display: block;
    margin-top: 10px;
  }
}

/*-------------------------------------------------------------------*/
/* === Landing screens === */
/* Auth */
.auth .login-half-bg {
  background: url("../../images/auth/login-bg.jpg");
  background-size: cover;
}

.auth .register-half-bg {
  background: url("../../images/auth/register-bg.jpg");
  background-size: cover;
}

.auth.lock-full-bg {
  background: url("../../images/auth/lockscreen-bg.jpg");
  background-size: cover;
}

.auth .lock-profile-img {
  width: 90px;
  height: 90px;
  border-radius: 100%;
}

.auth .auth-form-light {
  background: #ffffff;
}

.auth .auth-form-light select {
  color: #c9c8c8;
}

.auth .auth-form-light .input-group .form-control:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:focus, .auth .auth-form-light .input-group .typeahead:focus,
.auth .auth-form-light .input-group .tt-query:focus,
.auth .auth-form-light .input-group .tt-hint:focus, .auth .auth-form-light .input-group .form-control:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:active, .auth .auth-form-light .input-group .typeahead:active,
.auth .auth-form-light .input-group .tt-query:active,
.auth .auth-form-light .input-group .tt-hint:active {
  border-color: #f3f3f3;
}

.auth .auth-form-transparent {
  background: transparent;
}

.auth .auth-form-transparent .form-control, .auth .auth-form-transparent .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-transparent .select2-selection--single, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field, .auth .auth-form-transparent .typeahead,
.auth .auth-form-transparent .tt-query,
.auth .auth-form-transparent .tt-hint,
.auth .auth-form-transparent .input-group-text {
  border-color: #6c7293;
}

.auth .auth-form-transparent .form-control:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-transparent .select2-selection--single:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:focus, .auth .auth-form-transparent .typeahead:focus,
.auth .auth-form-transparent .tt-query:focus,
.auth .auth-form-transparent .tt-hint:focus, .auth .auth-form-transparent .form-control:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-transparent .select2-selection--single:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:active, .auth .auth-form-transparent .typeahead:active,
.auth .auth-form-transparent .tt-query:active,
.auth .auth-form-transparent .tt-hint:active,
.auth .auth-form-transparent .input-group-text:focus,
.auth .auth-form-transparent .input-group-text:active {
  border-color: #6c7293;
}

.auth .auth-form-transparent select {
  outline-color: #6c7293;
}

.auth.auth-img-bg {
  padding: 0;
}

@media (min-width: 768px) {
  .auth.auth-img-bg .auth-form-transparent {
    width: 55%;
    margin: auto;
  }
}

.auth .brand-logo {
  margin-bottom: 2rem;
}

.auth .brand-logo img {
  width: 150px;
}

.auth form .form-group {
  margin-bottom: 1.5rem;
}

.auth form .form-group label {
  font-size: .8125rem;
}

.auth form .form-group .form-control, .auth form .form-group .select2-container--default .select2-selection--single, .select2-container--default .auth form .form-group .select2-selection--single, .auth form .form-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth form .form-group .select2-search__field, .auth form .form-group .typeahead,
.auth form .form-group .tt-query,
.auth form .form-group .tt-hint {
  background: transparent;
  border-radius: 0;
  font-size: .9375rem;
}

.auth form .auth-form-btn {
  height: 50px;
  line-height: 1.5;
}

.auth form .auth-link {
  font-size: 0.875rem;
}

.auth form .auth-link:hover {
  color: initial;
}

.page-body-wrapper {
  min-height: calc(100vh - 4.625rem);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  padding-left: 0;
  padding-right: 0;
  padding-top: 1.875rem;
  background: #f4f5fa;
}

.page-body-wrapper.full-page-wrapper {
  width: 100%;
  min-height: 100vh;
  padding-top: 0;
}

.navbar + .page-body-wrapper {
  padding-top: calc(4.625rem + 1.875rem);
}

.main-panel {
  transition: width 0.25s ease, margin 0.25s ease;
  width: calc(100% - 236px);
  min-height: calc(100vh - 4.625rem);
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column;
}

@media (max-width: 991px) {
  .main-panel {
    margin-left: 0;
    width: 100%;
  }
}

.content-wrapper {
  padding: 0 1.812rem 1.812rem;
  width: 100%;
  -webkit-flex-grow: 1;
  flex-grow: 1;
}

@media (max-width: 767px) {
  .content-wrapper {
    padding: 1.5rem 1.5rem;
  }
}

/* Sidebar */
.sidebar {
  min-height: calc(100vh - 4.625rem);
  background: #ffffff;
  font-family: "Poppins", sans-serif;
  font-weight: normal;
  padding: 0;
  width: 236px;
  z-index: 11;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
  box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  -webkit-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  -moz-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  -ms-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  margin-left: 0.5rem;
  margin-bottom: 2.062rem;
  border-radius: 6px;
  border: 1px solid #e4e4f4;
}

.sidebar .nav {
  overflow: hidden;
  flex-wrap: nowrap;
  flex-direction: column;
  margin-bottom: 60px;
}

.sidebar .nav .nav-item {
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  transition-property: background;
  -webkit-transition-property: background;
}

.sidebar .nav .nav-item .collapse {
  z-index: 999;
}

.sidebar .nav .nav-item .nav-link {
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  white-space: nowrap;
  padding: 0.87rem 0.875rem 0.87rem 0.6rem;
  color: #001737;
  -webkit-transition-duration: 0.45s;
  -moz-transition-duration: 0.45s;
  -o-transition-duration: 0.45s;
  transition-duration: 0.45s;
  transition-property: color;
  -webkit-transition-property: color;
}

.sidebar .nav .nav-item .nav-link i {
  color: inherit;
}

.sidebar .nav .nav-item .nav-link i.menu-icon {
  font-size: 1.215rem;
  line-height: 1;
  margin-right: .75rem;
  color: #6c7293;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-icon {
  margin-left: 2rem;
  margin-right: 0;
}

.sidebar .nav .nav-item .nav-link i.menu-icon:before {
  vertical-align: middle;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow {
  display: inline-block;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-left: auto;
  margin-right: 0;
  color: #686868;
}

.rtl .sidebar .nav .nav-item .nav-link i.menu-arrow {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link i.menu-arrow:before {
  content: "\e0cf";
  font-family: "typicons";
  font-style: normal;
  display: block;
  font-size: 1rem;
  line-height: 10px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.sidebar .nav .nav-item .nav-link .menu-title {
  color: inherit;
  display: inline-block;
  font-size: 0.875rem;
  line-height: 1;
  vertical-align: middle;
}

.sidebar .nav .nav-item .nav-link .badge {
  margin-left: auto;
}

.rtl .sidebar .nav .nav-item .nav-link .badge {
  margin-left: 0;
  margin-right: auto;
}

.sidebar .nav .nav-item .nav-link[aria-expanded="true"] i.menu-arrow:before {
  content: "\e0bd";
}

.sidebar .nav .nav-item.active > .nav-link {
  background: #f7f8fc;
  position: relative;
}

.sidebar .nav .nav-item.active > .nav-link i,
.sidebar .nav .nav-item.active > .nav-link .menu-title,
.sidebar .nav .nav-item.active > .nav-link .menu-arrow {
  color: #12253f;
}

.sidebar .nav:not(.sub-menu) {
  margin-top: 1rem;
  margin-left: 1.3rem;
  margin-right: 1.25rem;
}

.sidebar .nav:not(.sub-menu) > .nav-item {
  margin-top: 0;
}

.sidebar .nav:not(.sub-menu) > .nav-item > .nav-link {
  margin: 0;
}

.sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: #f7f8fc;
  color: #56595a;
}

.sidebar .nav.sub-menu {
  margin-bottom: 0;
  margin-top: 0;
  list-style: none;
  padding: 0.25rem 0 0 1.1rem;
}

.sidebar .nav.sub-menu .nav-item {
  padding: 0;
}

.sidebar .nav.sub-menu .nav-item::before {
  content: '';
  width: 5px;
  height: 5px;
  position: absolute;
  margin-top: 16px;
  border-radius: 50%;
  background: #8e95aa;
}

.sidebar .nav.sub-menu .nav-item .nav-link {
  color: #001737;
  padding: 0.7rem 1rem;
  position: relative;
  font-size: 0.875rem;
  line-height: 1;
  height: auto;
  border-top: 0;
}

.sidebar .nav.sub-menu .nav-item .nav-link:hover {
  color: #000;
}

.sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: #000;
  background: transparent;
}

.sidebar .nav.sub-menu .nav-item:hover {
  background: transparent;
}

.sidebar-dark .sidebar {
  background: #282f3a;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link {
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link i {
  color: inherit;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link i.menu-icon {
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav .nav-item .nav-link .menu-title {
  color: inherit;
}

.sidebar-dark .sidebar .nav .nav-item.active > .nav-link {
  background: initial;
}

.sidebar-dark .sidebar .nav .nav-item.active > .nav-link .menu-title,
.sidebar-dark .sidebar .nav .nav-item.active > .nav-link i {
  color: #c0bbbb;
}

.sidebar-dark .sidebar .nav:not(.sub-menu) > .nav-item:hover > .nav-link {
  background: #3b424c;
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link {
  color: #d0cfcf;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:before {
  color: #e9e9e9;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link.active {
  color: #c0bbbb;
  background: transparent;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:hover {
  color: #9a94a7;
}

.sidebar-dark .sidebar .nav.sub-menu .nav-item:hover {
  background: transparent;
}

/* style for off-canvas menu*/
@media screen and (max-width: 991px) {
  .sidebar-offcanvas {
    position: fixed;
    max-height: calc(100vh - 4.625rem);
    top: 4.625rem;
    bottom: 0;
    overflow: auto;
    right: -236px;
    -webkit-transition: all 0.25s ease-out;
    -o-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }
  .sidebar-offcanvas.active {
    right: 0;
  }
}

/* Navbar */
.navbar {
  font-weight: 400;
  transition: background 0.25s ease;
  -webkit-transition: background 0.25s ease;
  -moz-transition: background 0.25s ease;
  -ms-transition: background 0.25s ease;
  border-bottom: 4px solid #844fc1;
  /* Navbar color variations */
}

.navbar .navbar-brand-wrapper {
  background: #844fc1;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
  width: calc(236px + 0.5rem);
  height: 4.625rem;
}

.navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper {
  margin-right: 1.3rem;
  margin-left: 1.8rem;
}

.navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand {
  color: #27367f;
  font-size: 1.5rem;
  margin-right: 0;
  padding: .25rem 0;
}

.navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand.brand-logo-mini {
  display: none;
}

@media (max-width: 991px) {
  .navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand.brand-logo-mini {
    display: inline-block;
    width: 3.125rem;
  }
}

.navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand:active, .navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand:focus, .navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand:hover {
  color: #1b2658;
}

.navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-brand img {
  width: calc(236px - 110px);
  max-width: 100%;
  height: 40px;
  margin: auto;
  vertical-align: middle;
}

.navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-toggler {
  padding: 0;
  color: #ffffff;
  border: 0;
}

@media (max-width: 991px) {
  .navbar .navbar-brand-wrapper .navbar-brand-inner-wrapper .navbar-toggler {
    display: none;
  }
}

.navbar .navbar-menu-wrapper {
  background: #fff;
  transition: width 0.25s ease;
  -webkit-transition: width 0.25s ease;
  -moz-transition: width 0.25s ease;
  -ms-transition: width 0.25s ease;
  color: #001737;
  padding-left: 1.812rem;
  padding-right: 1.812rem;
  width: calc(100% - 236px - 0.5rem);
  height: 4.625rem;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper {
    width: calc(100% - 55px);
    padding-left: 15px;
    padding-right: 15px;
  }
}

.navbar .navbar-menu-wrapper .navbar-toggler {
  border: 0;
  color: inherit;
  font-size: 1.5rem;
  padding: 0;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
    display: none;
  }
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
    padding-left: 15px;
    padding-right: 11px;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item {
  margin-left: 0.531rem;
  margin-right: 0.531rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item:last-child {
  margin-right: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
  color: inherit;
  font-size: 1rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings {
  border-left: 1px solid rgba(255, 255, 255, 0.24);
  margin: 0;
  padding-left: 1.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings .nav-link {
  padding: 0;
  text-align: center;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings i {
  font-size: 1.5rem;
  vertical-align: middle;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile {
  margin-right: 0.25rem;
  margin-left: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile img {
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 4px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-name {
  margin-left: .5rem;
  font-weight: 500;
  font-size: 1rem;
}

@media (max-width: 767px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-name {
    display: none;
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-user-status {
  margin-left: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-user-status p {
  color: #212529;
  font-size: 12px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-date .nav-link h6 {
  font-weight: normal;
  font-size: .875rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-date .nav-link i {
  margin-left: 0.562rem;
  font-size: 1.125rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  border: none;
  -webkit-box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
  box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  position: absolute;
  font-size: 0.9rem;
  margin-top: 0;
  right: 0;
  left: auto;
  top: 4.625rem;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
  right: auto;
  left: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
  margin-bottom: 0;
  padding: .65rem 1.5rem;
  cursor: pointer;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  font-size: 17px;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis {
  max-width: 200px;
  overflow: hidden;
  text-overflow: ellipsis;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
  margin-left: 10px;
}

.rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
  margin-left: 0;
  margin-right: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-divider {
  margin: 0;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown i {
  margin-right: .5rem;
  vertical-align: middle;
}

@media (max-width: 991px) {
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
    position: static;
  }
  .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
    left: 20px;
    right: 20px;
    top: 4.625rem;
    width: calc(100% - 40px);
  }
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator {
  position: relative;
  padding: 0;
  text-align: center;
  width: 2.5rem;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator i {
  font-size: 1.25rem;
  margin-right: 0;
  vertical-align: middle;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator .count {
  position: absolute;
  left: 50%;
  top: 10px;
  width: 7px;
  height: 7px;
  border-radius: 100%;
  background: #dc3545;
}

.navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .count-indicator:after {
  display: none;
}

.navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  margin-left: auto;
}

.navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item .nav-link {
  -webkit-box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  box-shadow: 0 5px 10px 0 rgba(230, 230, 243, 0.88);
  border: 1px solid #e4e4f4;
  padding-left: .875rem;
  padding-right: .875rem;
  border-radius: 0.25rem;
  height: 2.5rem;
}

@media (min-width: 992px) {
  .rtl .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
    margin-left: 0;
    margin-right: auto;
  }
}

.navbar.navbar-primary .navbar-menu-wrapper {
  background: #844fc1;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-primary:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

.navbar.navbar-secondary .navbar-menu-wrapper {
  background: #6c7293;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-secondary:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

.navbar.navbar-success .navbar-menu-wrapper {
  background: #21bf06;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-success:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

.navbar.navbar-info .navbar-menu-wrapper {
  background: #3b86d1;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-info:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

.navbar.navbar-warning .navbar-menu-wrapper {
  background: #f39915;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-warning:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

.navbar.navbar-danger .navbar-menu-wrapper {
  background: #dc3545;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-danger:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #f8f9fa;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-light:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

.navbar.navbar-dark .navbar-menu-wrapper {
  background: #282f3a;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .navbar-toggler {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item .nav-link {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .nav-item.nav-user-status p {
  color: #ffffff;
}

.navbar.navbar-dark:not(.navbar-light) .navbar-menu-wrapper .navbar-nav-right .nav-item .nav-link {
  box-shadow: none;
}

.navbar.navbar-light .navbar-menu-wrapper {
  background: #ffffff;
  border-left: 1px solid #f3f3f3;
}

.navbar.navbar-light .navbar-menu-wrapper .navbar-toggler {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item .nav-link {
  color: #282f3a;
}

.navbar.navbar-light .navbar-menu-wrapper .nav-item.nav-search .input-group {
  background: rgba(40, 47, 58, 0.24);
}

.navbar.navbar-dark .navbar-menu-wrapper {
  border-left-color: #747474;
}

.navbar.navbar-danger .navbar-menu-wrapper .nav-item .nav-link.count-indicator .count {
  background: #844fc1;
}

@media (max-width: 991px) {
  .navbar {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
    display: none;
  }
  .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
    display: inline-block;
  }
  .navbar-collapse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 0.5rem;
  }
}

@media (max-width: 480px) {
  .navbar .navbar-brand-wrapper {
    width: 55px;
  }
  .navbar .navbar-brand-wrapper .brand-logo-mini {
    padding-top: 0px;
  }
}

.navbar-breadcrumb {
  background: #00c8bf;
  margin-top: 4.625rem;
}

.navbar-breadcrumb .navbar-links-wrapper {
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease;
  width: calc(236px + 0.5rem);
  height: 4.062rem;
}

@media (max-width: 991px) {
  .navbar-breadcrumb .navbar-links-wrapper {
    width: 0;
  }
}

.navbar-breadcrumb .navbar-links-wrapper .nav-link {
  display: none;
}

@media (min-width: 991px) {
  .navbar-breadcrumb .navbar-links-wrapper .nav-link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-right: 1px solid #56d3c9;
  }
}

.navbar-breadcrumb .navbar-links-wrapper .nav-link a {
  color: #fff;
  font-size: 1.187rem;
}

.navbar-breadcrumb .navbar-menu-wrapper {
  transition: width 0.25s ease;
  -webkit-transition: width 0.25s ease;
  -moz-transition: width 0.25s ease;
  -ms-transition: width 0.25s ease;
  color: #001737;
  padding-left: 1.812rem;
  padding-right: 1.812rem;
  width: calc(100% - 236px - 0.5rem);
  height: 4.062rem;
}

@media (max-width: 991px) {
  .navbar-breadcrumb .navbar-menu-wrapper {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
  }
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav {
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-align-items: center;
  align-items: center;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item {
  margin-left: 0.593rem;
  margin-right: 0.593rem;
  color: white;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search {
  margin-left: 2rem;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group {
  background: #fff;
  border-radius: 2px;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-text {
  background: transparent;
  border: 0;
  color: #001737;
  padding: 0;
  height: auto;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single, .select2-container--default .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint {
  margin-left: .5rem;
  height: 2.312rem;
  padding: 0 .4rem;
  width: 13.375rem;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-webkit-input-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-webkit-input-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-webkit-input-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-webkit-input-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query::-webkit-input-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint::-webkit-input-placeholder {
  color: #a5abcc;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-moz-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-moz-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-moz-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-moz-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query:-moz-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint:-moz-placeholder {
  color: #a5abcc;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control::-moz-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single::-moz-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field::-moz-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead::-moz-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query::-moz-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint::-moz-placeholder {
  color: #a5abcc;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .form-control:-ms-input-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-selection--single:-ms-input-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .select2-search__field:-ms-input-placeholder, .navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .typeahead:-ms-input-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-query:-ms-input-placeholder,
.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .tt-hint:-ms-input-placeholder {
  color: #a5abcc;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-prepend {
  background: #dc3545;
  cursor: pointer;
  border-radius: 0 2px 2px 0;
  width: 2.75rem;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav .nav-item.nav-search .input-group .input-group-prepend .input-group-text {
  color: #ffffff;
  font-size: 1.25rem;
}

.navbar-breadcrumb .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  margin-left: auto;
}

/* Layouts */
@media (min-width: 992px) {
  .sidebar-mini .navbar .navbar-brand-wrapper {
    width: 185px;
  }
  .sidebar-mini .navbar .navbar-brand-wrapper .navbar-brand {
    margin-left: 1rem;
    margin-right: 1rem;
  }
  .sidebar-mini .navbar .navbar-menu-wrapper {
    width: calc(100% - 185px);
  }
  .sidebar-mini .sidebar {
    width: 185px;
  }
  .sidebar-mini .sidebar .nav .nav-item {
    padding: 0;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-flex-direction: column;
    flex-direction: column;
    text-align: center;
    position: relative;
    border-bottom: none;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .menu-title {
    display: block;
    margin: auto;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link .badge {
    margin-left: 5px;
    display: none;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-icon {
    display: block;
    margin-right: auto;
    margin-left: auto;
    margin-bottom: .625rem;
  }
  .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: inline-block;
    margin-left: 5px;
    position: absolute;
    top: 36%;
    right: 20px;
    -moz-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  .sidebar-mini .sidebar .nav.sub-menu .nav-item::before {
    margin-left: 7px;
  }
  .sidebar-mini .main-panel {
    width: calc(100% - 185px);
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu {
    padding: 0;
    border-top: none;
  }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu .nav-item .nav-link {
    padding: .75rem 0 .75rem 1.5rem;
    display: block;
    text-align: left;
    width: 66%;
  }
}

@media (min-width: 992px) {
  .sidebar-icon-only .navbar .navbar-brand-wrapper {
    width: calc(70px + 0.5rem);
  }
  .sidebar-icon-only .navbar .navbar-brand-wrapper .brand-logo {
    display: none;
  }
  .sidebar-icon-only .navbar .navbar-menu-wrapper {
    width: calc(100% - 70px - 0.5rem);
  }
  .sidebar-icon-only .navbar-breadcrumb .navbar-links-wrapper {
    width: calc(70px + 0.5rem);
  }
  .sidebar-icon-only .navbar-breadcrumb .navbar-links-wrapper .nav-link {
    display: none;
  }
  .sidebar-icon-only .navbar-breadcrumb .navbar-menu-wrapper {
    width: calc(100% - 70px - 0.5rem);
  }
  .sidebar-icon-only .sidebar {
    width: 70px;
  }
  .sidebar-icon-only .sidebar .nav {
    overflow: visible;
  }
  .sidebar-icon-only .sidebar .nav .nav-item {
    position: relative;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link {
    display: block;
    padding-left: .5rem;
    padding-right: .5rem;
    text-align: center;
    position: static;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title,
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .badge, .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-sub-title {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 0 5px 5px 0px;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
    border-radius: 5px 0 0 5px;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
    margin-right: 0;
    margin-left: 0;
    margin-bottom: 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-arrow {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 0 5px 0 0px;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
    border-radius: 5px 0 0 0;
  }
  .sidebar-icon-only .sidebar .nav .nav-item .collapse {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    align-items: center;
    background: #ffffff;
    padding: 0.5rem 1.4rem;
    left: calc(70px - 2px);
    position: absolute;
    text-align: left;
    top: 0;
    bottom: 0;
    width: 190px;
    z-index: 1;
    line-height: 1.8;
    box-shadow: 4px 0px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    background: #282f3a;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    left: auto;
    right: 70px;
    text-align: left;
    box-shadow: -4px 0px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
    color: #ffffff;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title:after {
    display: none;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link:hover .menu-title {
    background: #ffffff;
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link:hover .menu-title {
    background: #282f3a;
  }
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse,
  .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    display: block;
    padding: .5rem 0;
    background: #ffffff;
    border-radius: 0 0 5px 0;
    position: absolute;
    left: calc(70px - 2px);
    width: 190px;
    box-shadow: 4px 4px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    background: #282f3a;
  }
  .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
    left: auto;
    right: 70px;
    border-radius: 0 0 0 5px;
    box-shadow: -4px 4px 7px 0px rgba(182, 185, 189, 0.25);
  }
  .sidebar-icon-only .sidebar .nav:not(.submenu) {
    margin-left: 0;
    margin-right: 0;
  }
  .sidebar-icon-only .sidebar .nav.sub-menu {
    padding: 0 0 0 1.5rem;
  }
  .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
    text-align: left;
    padding-left: 20px;
  }
  .sidebar-icon-only .main-panel {
    width: calc(100% - 70px);
  }
}

@media (min-width: 992px) {
  .sidebar-hidden .sidebar {
    transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -ms-transition: width 0.25s ease;
    width: 0;
    border: 0;
    margin: 0;
  }
  .sidebar-hidden .main-panel {
    width: 100%;
  }
}

@media (min-width: 992px) {
  .sidebar-absolute .page-body-wrapper {
    position: relative;
  }
  .sidebar-absolute .page-body-wrapper .sidebar {
    transition: none;
  }
  .sidebar-absolute:not(.sidebar-hidden) .sidebar {
    position: absolute;
    height: 100%;
    -webkit-box-shadow: 0 0 10px 1px #dbdbdb;
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow: 0 0 10px 1px #dbdbdb;
    /* Firefox 3.5 - 3.6 */
    box-shadow: 0 0 10px 1px #dbdbdb;
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  }
  .sidebar-absolute .main-panel {
    width: 100%;
    transition: none;
  }
}

@media (min-width: 992px) {
  .sidebar-fixed .sidebar {
    position: fixed;
    max-height: auto;
  }
  .sidebar-fixed .sidebar .nav {
    max-height: calc(100vh - 4.625rem);
    overflow: auto;
    position: relative;
  }
  .sidebar-fixed .sidebar .nav.sub-menu {
    max-height: none;
  }
  .sidebar-fixed .main-panel {
    margin-left: 236px;
  }
  .sidebar-fixed.sidebar-icon-only .main-panel {
    margin-left: 70px;
  }
}

@media (min-width: 992px) {
  .boxed-layout .container-scroller {
    background: #c6c8ca;
    padding: 0 calc((100% - 1200px) / 2);
  }
  .boxed-layout .navbar.fixed-top {
    margin: auto;
    max-width: 1200px;
  }
}

.rtl {
  direction: rtl;
  text-align: right;
}

.rtl .sidebar .nav {
  padding-right: 0;
}

.rtl .sidebar .nav.sub-menu {
  padding: 0 4.5rem 0 0;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu {
  padding-right: 0rem;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link {
  padding-right: 3rem;
  text-align: right;
}

.sidebar-icon-only.rtl .sidebar .nav.sub-menu .nav-item .nav-link:before {
  right: 1.75rem;
}

.rtl .product-chart-wrapper::-webkit-scrollbar,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar,
.rtl .sidebar-fixed .nav::-webkit-scrollbar,
.rtl .table-responsive::-webkit-scrollbar,
.rtl ul.chats::-webkit-scrollbar {
  width: 0.5em;
}

.rtl .product-chart-wrapper::-webkit-scrollbar-track,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-track,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-track,
.rtl .table-responsive::-webkit-scrollbar-track,
.rtl ul.chats::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.rtl .product-chart-wrapper::-webkit-scrollbar-thumb,
.rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-thumb,
.rtl .sidebar-fixed .nav::-webkit-scrollbar-thumb,
.rtl .table-responsive::-webkit-scrollbar-thumb,
.rtl ul.chats::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}

/* Settings Panel */
.settings-panel {
  border-left: 1px solid #f3f3f3;
  display: block;
  position: fixed;
  top: 4.625rem;
  right: -300px;
  bottom: 0;
  width: 300px;
  height: 100vh;
  min-height: 100%;
  background: #ffffff;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-property: right, box-shadow;
  -moz-transition-property: right, box-shadow;
  -o-transition-property: right, box-shadow;
  transition-property: right, box-shadow;
  z-index: 9999;
}

.settings-panel .nav-tabs {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  width: auto;
  margin: 0;
  padding: 0;
  background: #ffffff;
}

.settings-panel .nav-tabs .nav-item {
  border: none;
}

.settings-panel .nav-tabs .nav-item .nav-link {
  background: transparent;
  text-align: center;
  border: none;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  color: #001737;
  -webkit-transition-duration: 0.4s;
  -moz-transition-duration: 0.4s;
  -o-transition-duration: 0.4s;
  transition-duration: 0.4s;
  transition-property: color;
  -webkit-transition-property: color;
  -webkit-justify-content: center;
  justify-content: center;
}

.settings-panel .nav-tabs .nav-item .nav-link.active {
  background: transparent;
  color: #844fc1;
}

.settings-panel .tab-content {
  border: none;
  padding: 20px 0 0px 0;
}

.settings-panel .tab-content .tab-pane.scroll-wrapper {
  position: relative;
  max-height: 100vh;
  height: 100%;
  padding-bottom: 150px;
}

.settings-panel .settings-heading {
  padding: 16px 0 13px 35px;
  font-size: 0.875rem;
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  line-height: 1;
  color: rgba(0, 0, 0, 0.9);
  opacity: 0.9;
  margin-bottom: 0;
  border-top: 1px solid #f3f3f3;
  border-bottom: 1px solid #f3f3f3;
}

.rtl .settings-panel .settings-heading {
  padding: 16px 35px 13px 0;
  text-align: right;
}

.rtl .settings-panel small.settings-heading {
  padding: 16px 0 13px 12px;
}

.settings-panel .sidebar-bg-options {
  padding: 13px 35px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  font-size: 0.875rem;
  line-height: 1;
  color: #595959;
  background: #ffffff;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-property: background;
  -moz-transition-property: background;
  -o-transition-property: background;
  transition-property: background;
}

.settings-panel .sidebar-bg-options.selected {
  background: #e6e9ed;
}

.settings-panel .color-tiles {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-around;
  justify-content: space-around;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0px 35px 10px 35px;
  padding-top: 15px;
}

.settings-panel .color-tiles .tiles {
  margin: 10px 18px;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
}

.settings-panel .color-tiles .tiles:before {
  content: "";
  width: 0px;
  height: 0px;
  opacity: 0;
  background: rgba(0, 0, 0, 0.3);
  border-radius: 100%;
  border: 0;
  -webkit-transition-duration: 0.25s;
  -moz-transition-duration: 0.25s;
  -o-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  -moz-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
}

.settings-panel .color-tiles .tiles.selected:before {
  width: 10px;
  height: 10px;
  opacity: 1;
  border-width: 1px;
}

.settings-panel .color-tiles .tiles.default {
  background: #e2e4e7;
}

.settings-panel .chat-list {
  padding-left: 0;
}

.settings-panel .chat-list .list {
  padding: 0.4rem 0.8rem;
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: space-between;
  justify-content: space-between;
  border-bottom: 1px solid #f3f3f3;
}

.settings-panel .chat-list .list:last-child {
  border-bottom: none;
}

.settings-panel .chat-list .list .profile {
  position: relative;
  margin-right: 1rem;
}

.settings-panel .chat-list .list .profile img {
  width: 2.50rem;
  height: 2.50rem;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span {
  height: 0.75rem;
  width: 0.75rem;
  position: absolute;
  bottom: 0.34rem;
  right: 0;
  border: 0.13rem solid #ffffff;
  border-radius: 100%;
}

.settings-panel .chat-list .list .profile span.online {
  background: #21bf06;
}

.settings-panel .chat-list .list .profile span.offline {
  background: #f39915;
}

.settings-panel .chat-list .list .info {
  margin-right: auto;
}

.settings-panel .chat-list .list .info p {
  display: block;
  margin-bottom: 0;
}

.settings-panel .chat-list .list .info p:last-child {
  opacity: 0.5;
  font-size: 0.8rem;
}

.rtl .settings-panel .chat-list .list .info p:last-child {
  text-align: right;
}

.settings-panel .chat-list .list.active {
  background: #f8f9fa;
}

.settings-panel.open {
  right: 0;
}

.settings-panel .settings-close {
  position: absolute;
  top: 16px;
  right: 10px;
  color: #844fc1;
  background: transparent;
  border-radius: 4px;
  padding: 0 3px;
  cursor: pointer;
  -webkit-transition-duration: 0.2s;
  -moz-transition-duration: 0.2s;
  -o-transition-duration: 0.2s;
  transition-duration: 0.2s;
  z-index: 999;
}

.settings-panel .settings-close:hover {
  background: rgba(255, 255, 255, 0.3);
}

.rtl .settings-panel .settings-close {
  right: unset;
  left: 10px;
}

.settings-panel .events p {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
}

.rtl .settings-panel .events p {
  text-align: right;
}

.rtl .settings-panel {
  right: unset;
  left: -300px;
  -webkit-transition-property: left;
  -moz-transition-property: left;
  -o-transition-property: left;
  transition-property: left;
}

.rtl .settings-panel .chat-list {
  padding-right: 0;
}

.rtl .settings-panel .chat-list .list .profile {
  margin-right: 0;
  margin-left: 1rem;
}

.rtl .settings-panel .chat-list .list .info {
  margin-right: 0;
  margin-left: auto;
}

.rtl .settings-panel .chat-list .list .info .badge {
  margin-right: 10px;
}

.rtl .settings-panel.open {
  left: 0;
  right: unset;
}

#theme-settings .settings-close {
  top: 12px;
  background: transparent;
}

#settings-trigger {
  position: fixed;
  bottom: 40px;
  right: 30px;
  height: 45px;
  width: 45px;
  background: #844fc1;
  z-index: 99;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  border-radius: 100%;
  -webkit-animation-duration: 1s;
  -moz-animation-duration: 1s;
  -ms-animation-duration: 1s;
  -o-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  -ms-animation-delay: 1s;
  -o-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

#settings-trigger i {
  color: #ffffff;
  font-size: 1rem;
  line-height: 1rem;
}

.rtl #settings-trigger {
  right: auto;
  left: 30px;
}

@media (max-width: 991px) {
  #settings-trigger {
    display: none;
  }
}

/*# sourceMappingURL=../maps/vertical-layout-light/style.css.map */

</style>