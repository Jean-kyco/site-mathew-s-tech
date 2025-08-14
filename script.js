// Filtrage des cours
document.querySelectorAll(".category-btn").forEach(btn => {
    btn.addEventListener("click", () => {
        let category = btn.getAttribute("data-category");
        document.querySelectorAll(".course-card").forEach(card => {
            if (category === "all" || card.getAttribute("data-category") === category) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });

        document.querySelectorAll(".category-btn").forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
    });
});

// Message de confirmation pour le bouton "En savoir plus"
function enSavoirPlus() {
    alert("Plus d'informations seront bientôt disponibles !");
}

// Validation simple du formulaire de contact
document.querySelector(".contact-form").addEventListener("submit", function(e) {
    e.preventDefault();
    alert("Votre message a été envoyé !");
    this.reset();
});
