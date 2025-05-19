function formkontrol() {
    let ad = document.forms["iletisimformu"]["isimsoyisim"].value;
    let posta = document.forms["iletisimformu"]["email"].value;
    let baslik = document.forms["iletisimformu"]["baslik"].value;
    let mesaj = document.forms["iletisimformu"]["mesaj"].value;
    if (ad == "") {
        alert("Ad soyad boş olamaz");
        return false;
    }
    if (posta == ""){
        alert("E-posta alanı boş olamaz");
        return false;

    }
    if (baslik==""){
        alert("Başlık alanı boş olamaz");
        return false;
    }
    if(mesaj == ""){
        alert("Mesaj alanı boş olamaz");
        return false;
    }
    return true;
}