$(function () {

    // Bootstrap dropdown open on hover

    $('.dropdown').hover(function () {
        $('.dropdown-toggle', this).trigger('click');
    });

    const tpl = article => `
        <div class="col">
            <div class="card" style="width: 18rem;">
                <a href="${article.path}"><img src="${article.img}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h4><a href="${article.path}">${article.title}</a></h4>
                    <p class="card-text"><a href="${article.path}">${article.description}</a></p>
                </div>
            </div>
        </div>
    `

    // $.getJSON('/articles/index.json', function (data, status) {
    //     const container = $('#article-container');
    //     container.html(data.slice(0, 4).map(tpl).join(''))
    // });

    // $.getJSON('/events/index.json', function (data, status) {
    //     const container = $('#events-container');
    //     container.html(data.slice(0, 4).map(tpl).join(''))
    // });

    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
});