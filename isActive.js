$(document).ready(function () {
    $('.a-sw').filter(function () {
        return this.href === location.href;
    }).addClass('isActive');
});