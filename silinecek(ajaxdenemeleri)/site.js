$(function(){
  $.ajax({
    type: "post",
    url: "ajax.php",
    dataType: "JSON", // ajax dosyasından dönen değerin tipini belirliyor, tipini jquery'e belirtiyoruz.
    data: {"ad":"Tayfun", "soyad":"Erbilen"},
    success: function(cevap){ // ajax dosyasından dönen değeri temsil ediyor.
      var Sonuc = "Adiniz: " + cevap.ad + "<br>Soyadinizz: " + cevap.soyad;
      $("#sonuc").html(Sonuc);
    }
  });
});
