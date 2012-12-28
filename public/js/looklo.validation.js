define(function(require, exports, module) {
	var $ = require('./jquery.sea.js');

	// 左边自适应高度
	exports.autoheight = function() {
		$(function() {
			var sh = $("#sidebar").innerHeight();
			var ch = $("#content").innerHeight();
			if (sh < ch) {
				$("#sidebar").css({
					'height' : 48 + $("#content").innerHeight()
				});
			} else {
				$("#content").css({
					'height' : $("#sidebar").innerHeight() - 48
				});
			}
		});
	};
	// 左边导航展开
	exports.menu = function() {
		$(function() {
			$(".menuTitle").toggle(function(e) {
				$("#menu .menuTitle").removeClass('current');
				$(this).addClass('current');
				// $("#menu").find('.menuList').hide();
				$(this).parent().find('.menuList').fadeIn();
				exports.autoheight();
				e.stopImmediatePropagation();
			}, function(e) {
				$("#menu .menuTitle").removeClass('current');
				// $("#menu").find('.menuList').hide();
				$(this).parent().find('.menuList').hide();
				exports.autoheight();
				e.stopImmediatePropagation();
			});
		});
	};
});
