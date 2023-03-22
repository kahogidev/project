function booking() {

    if  (document.getElementById("name").value == 0){
        alert("Buyurtmani yuborish uchun barcha maydonlar to'ldirilishi shart!")

    }else if(document.getElementById("email").value == 0){
        alert("Buyurtmani yuborish uchun barcha maydonlar to'ldirilishi shart!")

    }else if(document.getElementById("phone").value == 0){
        alert("Buyurtmani yuborish uchun barcha maydonlar to'ldirilishi shart!")

    }else if(document.getElementById("select").value == 0){
        alert("Buyurtmani yuborish uchun barcha maydonlar to'ldirilishi shart!")

    }else if(document.getElementById("date").value == 0){
        alert("Buyurtmani yuborish uchun barcha maydonlar to'ldirilishi shart!")
    }else{

        var name = document.getElementById("name").value;
        //
        // var surname = document.getElementById("surname").value;
        //
        var email = document.getElementById("email").value;

        var phone = document.getElementById("phone").value;
        var date = document.getElementById("date").value;
        var tour = document.getElementById("select").value;
        var my_text = `Yangi buyurtmachi:%0A - Ism: ${name} %0A - Telefon: ${phone} %0A -E-mail: ${email} %0A - Sayohat sanasi: ${date} %0A - Tur paket: ${tour}`;
        var token =  "5941430206:AAEuCKxOpc0DlwzixTeAGc-qZiZgQJk8y6M";
        var chat_id = -791939883;
        // var chat_id = -683032316;
        var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${my_text}`;
        let api = new XMLHttpRequest();
        api.open("GET", url, true);
        api.send();
        alert("Tabriklaymiz! Buyurtmangiz muvaffaqqiyatli qabul qilindi! Tez orada siz bilan bog'lanamiz.");
    }
}