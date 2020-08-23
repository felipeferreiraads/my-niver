$('.mobile').click(() => {
    $('header nav').css({ opacity: 1, visibility: 'visible' })
})

$('.mobile-close').click(() => {
    $('header nav').css({ opacity: 0, visibility: 'hidden' })
})