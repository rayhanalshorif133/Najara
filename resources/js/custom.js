$(function () {
    handleSearch();
});

const handleSearch = () => {

    // if press enter key
    $("input[name='search']").keypress(function (e) {
        if (e.which == 13) {
            let search = $("input[name='search']").val();
            if (search != "") {
                location.href = "/search/" + search;
            }
        }
    })


    $(".search-btn").click(function () {
        let search = $("input[name='search']").val();
        if (search != "") {
            location.href = "/search/" + search;
        }
    });

    $("input[name='search']").keyup(function () {
        let search = $("input[name='search']").val();
        if (search == "") {
            $(".game-name").parent().parent().parent().show();
        }
    });
};