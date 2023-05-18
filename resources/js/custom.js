$(function(){
    handleSearch();
});

const handleSearch = () => {
    $(".search-btn").click(function(){
        let search = $("input[name='search']").val();
        if(search != ""){
           var gameNames = $(".game-name");

           gameNames.each(function(item, index){
                var li = $(this).parent().parent().parent();
                if($(this).text().toLowerCase().indexOf(search.toLowerCase()) == -1){
                    li.hide();
                }else{
                    li.show();
                }
           });

        }
    });

    $("input[name='search']").keyup(function(){
        let search = $("input[name='search']").val();
        if(search == ""){
            $(".game-name").parent().parent().parent().show();
        }
    });
};