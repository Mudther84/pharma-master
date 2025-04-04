document.querySelector("#contactForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const fname = document.getElementById("c_fname").value;
    const lname = document.getElementById("c_lname").value;
    const email = document.getElementById("c_email").value;
    const subject = document.getElementById("c_subject").value;
    const message = document.getElementById("c_message").value;

    // تحقق من البيانات
    if (!fname || !lname || !email || !message) {
        alert("Please fill in all required fields.");
        return;
    }

    // تحقق من أن البريد الإلكتروني صحيح
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    const formData = {
        c_fname: fname,
        c_lname: lname,
        c_email: email,
        c_subject: subject,
        c_message: message
    };

    fetch("", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(formData)
    })
        .then(response => response.json())
        .then(data => alert(data.message))
        .catch(error => console.error("Error:", error));
});