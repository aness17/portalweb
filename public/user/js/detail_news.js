let base_url = "http://localhost:8080/";

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
