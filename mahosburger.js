function submitReservation() {
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const phone = document.getElementById("phone").value;
    const time = document.getElementById("time").value;

    if (firstName && lastName && phone && time) {
        const resultDiv = document.getElementById("result");
        resultDiv.innerHTML = `
            <strong>Rezervasyonunuz başarıyla oluşturuldu!</strong><br>
            Ad: ${firstName} <br>
            Soyad: ${lastName} <br>
            Telefon: ${phone} <br>
            Saat: ${time}
        `;
        resultDiv.style.color = "green";
        resultDiv.style.fontSize = "1.2em";

        const form = document.getElementById("reservationForm");
        form.submit();  
    } else {
        alert("Lütfen tüm alanları doldurunuz!");
    }
}
