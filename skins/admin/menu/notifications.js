/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Notifications controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

jQuery(function () {
  core.microhandlers.add(
    'updateMenuNotificationCount',
    '.notification-menu',
    function() {
      var $self = jQuery(this);
      if (0 < $self.data('unread-count') && !$self.parent('.box').is('.read')) {
        var node = $self.closest('.box').parent();
        node.addClass('has-unread');
        node.find('.icon .unread-mark').text($self.data('unread-count'));
      }
    }
  );

  core.microhandlers.add(
    'assignPopupHandlersOnNotifications',
    '.notification-menu',
    function() {
      core.autoload(PopupButton);
    }
  );

  var notificationMenu = jQuery('.menu.notification');

  notificationMenu.live('mouseenter', function () {
    var element = jQuery(this);
    if (!element.is('.has-unread')) {
      return;
    }

    var menuType = jQuery('.notification-menu', element).data('menu-type');
    this.readTimer = setTimeout(function () {
      jQuery.cookie('notification_read_' + menuType, Date.now());
      element.removeClass('has-unread');
      jQuery.ajax({
        url: xliteConfig.script + "?target=main&action=set_notifications_as_read&menuType=" + menuType
      }).done(function() {
        jQuery.removeCookie('notification_read_' + menuType);
      });
    }, 2000)
  });

  notificationMenu.live('mouseleave', function () {
    clearInterval(this.readTimer);
  });
});
