$(function() {
 $.ajaxSetup({
                headers: {
                    'X-XSRF-Token': $('meta[name="_token"]').attr('content')
                }
            });
});

$(document).ready(function() {

  $(document).on('click', '.pagination a', function(e) {

    get_page($(this).attr('href').split('page=')[1]);

    e.preventDefault();

  });
 }); 

function get_page(page) {

  $.ajax({

    url : '/listsurahs?page=' + page,

    type : 'GET',

    dataType : 'json',

    success : function(data) {

      $('#sidesurahs-list').html(data['view']);

    },

    error : function(xhr, status, error) {

      console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error);

    },

    complete : function() {

      alreadyloading = false;

    }

  });

}
$('#searchsurahside').on('click', function(){

  $.ajax({

    url : '/listsurahs',

    type : 'GET',

    dataType : 'json',

    data : {

      'keywords' : $('#keywords').val()

    },

    success : function(data) {

      $('#sidesurahs-list').html(data['view']);

    },

    error : function(xhr, status) {

      console.log(xhr.error + " ERROR STATUS : " + status);

    },

    complete : function() {

      alreadyloading = false;

    }

  });

});

$(document).ready(function() {

  $(document).on('click', '#id', function(e) {

    sort_articles();

    e.preventDefault();

  });

});

function sort_articles() {

  $('#id').on('click', function() {
    var url = 

    $.ajax({

      url : '/listsurahs',

      typs : 'GET',

      dataType : 'json',

      data : {

        "direction" : $('#direction').val()

      },

      success : function(data) {

        $('#sidesurahs-list').html(data['view']);

        $('#direction').val(data['direction']);

        if(data['direction'] == 'asc') {

          $('i#ic-direction').attr({class: "fa fa-arrow-up"});

        } else {

          $('i#ic-direction').attr({class: "fa fa-arrow-down"});

        }

      },

      error : function(xhr, status, error) {

        console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error);

      },

      complete : function() {

        alreadyloading = false;

      }

    });

  });

}

