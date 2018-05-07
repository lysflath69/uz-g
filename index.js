
$.post( "https://booking.uz.gov.ua/ua/",
    { from: "2200001", to: "2218300", date: "2018-05-12", time: "00%3A00", url: "train-list" },
    function( data ) {
      console.log(data);
});