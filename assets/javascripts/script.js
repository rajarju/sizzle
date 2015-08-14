/**
 * @file
 * Custom scripts for theme.
 */
(function ($) {
  // Match height.
  Drupal.behaviors.equalMenuHeight = {
    attach: function(context, settings) {
      $('.menu--view-mode-grid', context).matchHeight();
    }
  }

  // Menu categories navigation.
  Drupal.behaviors.menuCategoriesNavigation = {
    attach: function(context, settings) {
      if ($('.view-menu-categories', context).length) {
        // Make navigation sticky.
        var stickyNavigation = new Waypoint.Sticky({
          element: $('.view-menu-categories', context)[0]
        });

        // Make category active when scrolled to.
        $('.view-menus > .view-content [data-menu-category]').waypoint({
          handler: function (direction) {
            var el = $(this.element);
            var category = el.data().menuCategory;
            $('[data-menu-category="' + category + '"]')
              .addClass('active')
              .siblings().removeClass('active');
          },
          offset: '10%'
        });
      }
    }
  }

  // Dropdown for views exposed forms.
  Drupal.behaviors.viewsFilterDropdown = {
    attach: function(context, settings) {
      if ($('.views-exposed-widget', context).length) {
        // Remove all open class on document click.
        $(document).click(function() {
          $('.views-exposed-widget').removeClass('open');
        });

        // Toggle open class on click.
        $('.views-exposed-widget').each(function() {
          var $this = $(this);
          $(this).find('label').click(function(e) {
            e.stopPropagation();
            $this.toggleClass('open');
          });
        });
      }
    }
  }

  // Clickable bef-checkboxes form-item
  Drupal.behaviors.clickableFormBefCheckboxes = {
    attach: function (context, settings) {
      $('.form-type-bef-checkbox').click(function(e) {
        e.stopPropagation();
        $(this).find('input').click();
      });
    }
  }
})(jQuery);
