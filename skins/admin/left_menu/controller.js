/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Left menu controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function LeftMenu() {
  var self = this;
  this.accordion = true;

  this.$menu = jQuery('#leftMenu');
  this.$body = jQuery('body');

  // this.headerHeight = jQuery('#header-wrapper').outerHeight();
  this.scrollTop = window.scrollY;

  jQuery(window)
    .scroll(_.partial(_.bind(this.recalculatePosition, this), undefined))
    .resize(_.partial(_.bind(this.recalculatePosition, this), undefined));

  this.$menu.on('affix-top.bs.affix', function () {
    jQuery(this).css('top', 0);
  });


  jQuery('.left-menu-ctrl').bind('click', _.bind(this.toggleMenu, this));

  jQuery('.menu .link', this.$menu).filter(function () {
    return jQuery(this).parent().nextAll('.box').length > 0;
  }).each(function () {
    var item = jQuery(this).closest('li');
    var box = jQuery(this).parent().nextAll('.box');
    var height = box.outerHeight();

    if (box.parents('.compressed').length) {
      box.css('width', 198);
      height = box.outerHeight() - 60;
      box.css('width', '');
    }

    box.css('height', height);
    item.data('box-height', height);
    box.css('visibility', 'visible');
    box.css('position', 'relative');

    item.addClass(item.hasClass('pre-expanded') ? 'expanded' : 'collapsed').removeClass('pre-expanded');

    setTimeout(function () {
      box.css('transition', 'opacity .25s ease-in-out, height .25s ease-in-out');
    }, 300);

  }).bind('click', function (e) {
    if (self.$menu.hasClass('compressed')) {
      return true;
    }

    e.preventDefault();
    self.toggleItem(jQuery(this).closest('li'));
    return false;
  });

  jQuery('#leftMenu.compressed > ul > li').live('mouseenter', function () {
    var box = jQuery('.box', this);
    if (box.length) {
      self.correctPosition(jQuery('.box', this));
    }
  });

  this.recalculatePosition();

  core.bind('recalculateLeftMenuPosition', function() {
    self.recalculatePosition()
  });
}

LeftMenu.prototype.getWindowHeight = function () {
  return window.innerHeight;
};

LeftMenu.prototype.getScrollDelta = function () {
  var result = window.scrollY - this.scrollTop;
  this.scrollTop = window.scrollY;

  return result;
};

LeftMenu.prototype.getMenuHeight = function () {
  var result = 0;
  this.$menu.children().each(function () {
    result += jQuery(this).outerHeight();
  });

  return result;
};

LeftMenu.prototype.getHeaderSpace = function () {
  var headerSpace = jQuery('#header-wrapper').outerHeight() - window.scrollY;

  headerSpace = headerSpace > 0 ? headerSpace : 0;

  if ($('.demo-header-wrapper').length > 0) {
    headerSpace += $('.demo-header-wrapper').outerHeight();
  }

  return headerSpace;
};

LeftMenu.prototype.recalculatePosition = function (heightDelta) {
  // don't do anything on overscroll
  if (document.body.scrollTop + window.innerHeight > document.body.scrollHeight) {
    return;
  }

  var viewPortHeight = window.innerHeight;
  var headerSpace = this.getHeaderSpace();
  this.$menu.css('min-height', viewPortHeight - headerSpace);

  var menuHeight = this.getMenuHeight() + (heightDelta || 0);
  var sideBar = jQuery('#sidebar-first');
  sideBar.height(menuHeight);

  var scrollDelta = this.getScrollDelta();

  var viewPortTop = window.scrollY;
  var menuTop = this.$menu.offset().top;

  var viewPortBottom = viewPortTop + viewPortHeight;
  var menuBottom = menuTop + menuHeight;

  var menuCssTop = parseInt(this.$menu.css('top'));
  var offset = menuCssTop - scrollDelta;

  var maxOffset = menuHeight - viewPortHeight;

  var isAffix = this.$menu.is('.affix')
    && menuTop !== sideBar.offset().top
    && menuTop !== 0;

  if (isAffix) {
    if (menuHeight < viewPortHeight) {
      this.$menu.css('min-height', viewPortHeight);
      this.$menu.css('top', 0);
    } else {
      if (scrollDelta > 0 && viewPortBottom < menuBottom) {
        this.$menu.css('top', -offset < maxOffset ? offset : -maxOffset);

      } else if (scrollDelta < 0 && viewPortTop > menuTop) {
        this.$menu.css('top', offset < 0 ? offset : 0);
      }

      if (viewPortBottom > menuBottom) {
        this.$menu.css('top', menuCssTop + (viewPortBottom - menuBottom));
      }

      var body = document.body, html = document.documentElement;
      var height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
      if (menuBottom >= height) {
        var self = this;
        setTimeout(
          function () {
            var menuHeight = self.getMenuHeight();
            if (menuTop + menuHeight >= height) {
              self.$menu.animate({top: viewPortHeight - menuHeight}, 150);
            }
          }, 300
        );
        // this.$menu.css('top', viewPortHeight - menuHeight);
      }
    }
  }

  if (this.$menu.is('.compressed')) {
    var visibleBox = jQuery('.box', this.$menu).filter(function () {
      return jQuery(this).css('visibility') === 'visible'
    });
    if (visibleBox.length) {
      this.correctPosition(visibleBox);
    }
  }
};

LeftMenu.prototype.windowScroll = function () {

};

LeftMenu.prototype.windowResize = function () {

};

LeftMenu.prototype.toggleItem = function (element) {
  var delta = 0;

  if (element.hasClass('expanded')) {
    this.hideItem(element);
    delta -= element.data('box-height');
  } else {
    if (this.accordion) {
      var self = this;
      jQuery('.menu-item', this.$menu).each(function () {
        var item = jQuery(this);
        if (item.hasClass('expanded')) {
          delta -= item.data('box-height');
        }
        self.hideItem(item);
      });
    }
    this.showItem(element);
    delta += element.data('box-height')
  }

  this.recalculatePosition(delta);
};

LeftMenu.prototype.hideItem = function (element) {
  element.removeClass('expanded').addClass('collapsed');
  core.trigger('layout.sidebar.changeHeight');
};

LeftMenu.prototype.showItem = function (element) {
  element.addClass('expanded').removeClass('collapsed');
  core.trigger('layout.sidebar.changeHeight');
};

LeftMenu.prototype.toggleMenu = function () {
  if (this.$body.hasClass('left-menu-compressed')) {
    this.decompress();
  } else {
    this.compress();
  }

  return false;
};

LeftMenu.prototype.compress = function () {
  var box = jQuery('.menu div.box', this.$menu);
  box.hide();
  setTimeout(function () {
    box.show();
  }, 250);

  this.$menu.addClass('compressed');
  this.$body.addClass('left-menu-compressed');

  jQuery.cookie('XCAdminLeftMenuCompressed', 1);

  core.trigger('left-menu-compressed');
};

LeftMenu.prototype.decompress = function () {
  this.$menu.removeClass('compressed');
  this.$body.removeClass('left-menu-compressed');

  jQuery('.box', this.$menu).css('top', 0);

  jQuery.cookie('XCAdminLeftMenuCompressed', 0);
};

LeftMenu.prototype.correctPosition = function (box) {
  box.css('top', 0);

  var boxTop = box.offset().top;
  var boxBottom = boxTop + box.outerHeight();

  var viewportTop = window.scrollY;
  var viewportBottom = viewportTop + document.documentElement.offsetHeight;

  //calculate  modifier and move
  if (boxBottom > (viewportBottom - 10)) {
    box.css('top', viewportBottom - boxBottom - 20);

  } else if (boxTop < (viewportTop + 10)) {
    box.css('top', viewportTop - boxTop);
  }
};

core.autoload(LeftMenu);


// function LeftMenuController() {
// };

// /**
//  * Makes left menu items behave like an accordion - when one item opens, other expanded items collapse
//  */
// LeftMenuController.accordion = true;

// LeftMenuController.toggleItem = function (element) {
//   if (element.hasClass('expanded')) {
//     LeftMenuController.hideItem(element);
//   } else {
//     if (LeftMenuController.accordion) {
//       element.parent().find('.menu-item').each(function () {
//         var item = $(this);
//         LeftMenuController.hideItem(item);
//       });
//     }
//     LeftMenuController.showItem(element);
//   }
// };

// LeftMenuController.hideItem = function (element) {
//   // element.children('.box').hide(
//   //     'blind',
//   //     {},
//   //     _.bind(
//   //         function() {
//   //             jQuery(this).removeClass('expanded');
//   //             core.trigger('layout.sidebar.changeHeight');
//   //         },
//   //         element.get(0)
//   //     )
//   // );
//
//   element.removeClass('expanded').addClass('collapsed');
//   core.trigger('layout.sidebar.changeHeight');
// };

// LeftMenuController.showItem = function (element) {
//   // element.children('.box').show(
//   //     'blind',
//   //     {},
//   //     _.bind(
//   //         function() {
//   //             jQuery(this).addClass('expanded');
//   //             core.trigger('layout.sidebar.changeHeight');
//   //         },
//   //         element.get(0)
//   //     )
//   // );
//
//   element.addClass('expanded').removeClass('collapsed');
//   core.trigger('layout.sidebar.changeHeight');
// };

// core.microhandlers.add(
//   'left-menu-compressed-box',
//   function () {
//     return jQuery('#leftMenu.compressed .menu li').filter(
//       function () {
//         return jQuery(this).children('.box').length > 0;
//       }
//     );
//   },
//   function () {
//     // var element = this;
//     // pullUpBox(element);
//     // jQuery(window).resize(function() {
//     //   pullUpBox(element);
//     // });
//     // jQuery(window).scroll(function() {
//     //   pullUpBox(element);
//     // });
//     //
//     // core.bind('left-menu-compressed', function() {
//     //   pullUpBox(element);
//     // });
//   }
// );

// function pullUpBox(menuItem) {
//
//   //get position data
//   var box = jQuery(menuItem).children('.box');
//   var arrow = box.children('.arr');
//   box.css('visibility', 'hidden');
//   box.css('display', 'block');
//   box.css('top', '');
//   arrow.css('top', '');
//   var boxBottom = box.offset().top + box.height();
//   var boxTop = box.offset().top;
//   var viewportBottom = window.pageYOffset + document.documentElement.offsetHeight;
//   var viewportTop = window.pageYOffset;
//   box.css('visibility', '');
//   box.css('display', '');
//
//   //calculate  modifier and move
//   if (boxBottom > (viewportBottom - 10)) {
//     var position = viewportBottom - boxBottom;
//     box.css('top', position);
//     arrow.css('top', parseFloat(arrow.css('top')) - position);
//
//   } else if (boxTop < (viewportTop + 10)) {
//     var position = viewportTop - boxTop;
//     box.css('top', position);
//     arrow.css('top', parseFloat(arrow.css('top')) - position);
//   }
// }

// core.microhandlers.add(
//   'left-menu-submenu-reposition',
//   function () {
//     return jQuery('#leftMenu .quick-links li').filter(
//       function () {
//         return jQuery(this).children('.box').length > 0;
//       }
//     );
//   },
//   function () {
//     var box = jQuery(this).children('.box');
//
//     jQuery(this).mouseover(
//       function (event) {
//         if (jQuery('body.left-menu-compressed').length) {
//           box.css('left', '');
//           box.children('.arr').eq(0).css('left', '');
//
//         } else {
//
//           var li = jQuery(this);
//
//           var wb = box.outerWidth();
//           if (li.offset().left > wb / 2 && wb > li.outerWidth()) {
//
//             // center
//             var diff = Math.round((wb - li.outerWidth()) / 2);
//             box.css('left', (diff * -1) + 'px');
//
//             var arr = box.children('.arr').eq(0);
//             arr.css('left', Math.round(diff + li.outerWidth() / 2) + 'px');
//           }
//         }
//       }
//     );
//   }
// );

// core.microhandlers.add(
//   'left-menu-submenu-preexpand',
//   function () {
//     return jQuery('#leftMenu .menu .link').filter(
//       function () {
//         return jQuery(this).parent().nextAll('.box').length > 0;
//       }
//     );
//   },
//   function () {
//     // jQuery(this)
//     //   .removeClass('pre-expanded')
//     //   .addClass('expanded');
//     //   // .children('.box')
//     //   // .show();
//     var line = jQuery(this).closest('li');
//     var box = jQuery(this).parent().nextAll('.box');
//     var correction = 0;
//     if (box.parents('.compressed').length) {
//       correction = 60;
//     }
//     box.css('height', box.outerHeight() - correction);
//     box.css('visibility', 'visible');
//     box.css('position', 'relative');
//     line.addClass(line.hasClass('pre-expanded') ? 'expanded' : 'collapsed').removeClass('pre-expanded');
//   }
// );

// core.microhandlers.add(
//   'left-menu-submenu-switch',
//   function () {
//     return jQuery('#leftMenu .menu .link').filter(
//       function () {
//         return jQuery(this).parent().nextAll('.box').length > 0;
//       }
//     );
//   },
//   function () {
//     var li = jQuery(this).parents('li').eq(0);
//     jQuery(this).click(
//       function () {
//
//         if (jQuery('#leftMenu').hasClass('compressed')) {
//           return true;
//         }
//
//         LeftMenuController.toggleItem(li);
//
//         return false;
//       }
//     );
//   }
// );

// core.microhandlers.add(
//   'left-menu-ctrl',
//   '.left-menu-ctrl',
//   function () {
//     var link = jQuery(this);
//
//     link.click(
//       function() {
//         var box = jQuery('body');
//         if (box.hasClass('left-menu-compressed')) {
//           box.removeClass('left-menu-compressed');
//
//           jQuery('#leftMenu').removeClass('compressed');
//
//           jQuery.cookie('XCAdminLeftMenuCompressed', 0);
//
//         } else {
//           box.addClass('left-menu-compressed');
//
//           jQuery('#leftMenu .menu div.box').hide();
//           setTimeout(function () {
//             jQuery('#leftMenu .menu div.box').show();
//           }, 250);
//
//           jQuery('#leftMenu').addClass('compressed');
//           jQuery.cookie('XCAdminLeftMenuCompressed', 1);
//           core.trigger('left-menu-compressed');
//         }
//
//         return false;
//       }
//     );
//
//   }
// );
