// let base_url = "https://192.168.111.183/portalweb/public/";
let base_url = "http://localhost/portalweb/";

function detailnews(id) {
  let id_berita = id;

  $.ajax({
    url: base_url + "detailnews",
    type: "POST",
    data: { id_berita: id_berita },
    headers: { "X-Requested-With": "XMLHttpRequest" },
    success: function (r) {
      let obj = JSON.parse(r);
      // console.log(obj[0]["title_berita"]);
      // let tbl = obj[0];
      let tbl =
        '<div class="container-fluid">' +
        '<div class="row">' +
        '<div class="col-md-12">' +
        obj[0]["title_berita"] +
        "</div>" +
        "<div>&nbsp;</div>" +
        '<div class="col-md-12 ml-auto"><img src="' +
        base_url +
        "foto/" +
        obj[0]["doc"] +
        '" style="width: 300px;" /></div>' +
        "</div>" +
        '<div class="row">' +
        '<div class="col-md-8 ml-auto">' +
        obj[0]["isi_berita"].replace("pp", "<div>&nbsp;</div>") +
        "</div>" +
        "</div>" +
        "</div>";
      // $("#detailnews").html("");
      // console.log(tbl);
      $("#result_detailnews").append(tbl);
    },
  });
}
function like(id){
  $.ajax({
    url : base_url + "like",
    type : "POST",
    data : { 
      idberita: id,
    },
    headers: { "X-Requested-With": "XMLHttpRequest" },
    success: function (r) {
      let likeButton = $(".fa-heart").addClass("fas").removeClass("far");
      console.log(likeButton);
    }
  });  
}

function comment_reply(id) {
  let id_parent = id;
  let tbl = "";
  $.ajax({
    url: base_url + "reply_comment",
    type: "POST",
    data: {
      id_parent: id_parent,
    },
    headers: { "X-Requested-With": "XMLHttpRequest" },
    success: function (r) {
      let obj = JSON.parse(r);
      tbl =
        '<div class="col-lg-12">' +
        '<div class="card">' +
        '<div class="card-body">' +
        '<h5 class="card-title">Reply Comment</h5>' +
        '<div class="d-flex justify-between-content">' +
        '<img class="rounded-circle mr-2" src="' +
        base_url +
        "foto/" +
        obj[0]["fotouser"] +
        '" width="45" height="45" alt="">' +
        "<h5>" +
        obj[0]["comment_content"] +
        "</h5>" +
        "</div>" +
        "<br />" +
        '<form method="post" action="' +
        base_url +
        'comment">' +
        '<div class="media ml-4">' +
        '<img class="rounded-circle mr-2" src="' +
        base_url +
        "foto/" +
        obj[0]["fotouser"] +
        '" width="45" height="45" alt="">' +
        '<input type="text" name="comment" class="form-control" id="comment" placeholder="Add Comment ..." required>' +
        '<input type="hidden" name="idberita" value="' +
        obj[0]["id_berita"] +
        '" />' +
        '<input type="hidden" name="idparent" value="' +
        obj[0]["id_comment"] +
        '" />' +
        '<button type="submit" class="btn btn-primary" style="font-size: 12pt;"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>' +
        "</div>" +
        "</form>" +
        "</div>" +
        "</div>" +
        "</div>";

      // $("#detailnews").html("");
      // console.log(tbl);
      $("#reply_comment").html("");
      $("#reply_comment").append(tbl);
    },
  });
}
