/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function () {
    $('li.active').removeClass('active');
    $(`a[data-menu="${location.pathname}"]`).closest('li').addClass('active');
});
