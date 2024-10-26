// pan-tracker.js

document.addEventListener("DOMContentLoaded", () => {
    // Fonction pour loguer les événements dans la console
    function logPanEvent(eventType, element) {
        const panAttribute = element.getAttribute("data-pan");
        console.log(`Événement : ${eventType}, Élément : ${panAttribute}`);
    }

    // Suivi des clics pour les boutons d'inscription
    document.querySelectorAll("button[data-pan]").forEach(button => {
        button.addEventListener("click", () => {
            logPanEvent("click", button);
        });
    });

    // Suivi des survols pour les sections d'aide
    document.querySelectorAll(".hover-info[data-pan]").forEach(helpElement => {
        helpElement.addEventListener("mouseover", () => {
            logPanEvent("hover", helpElement);
        });
    });

    // Suivi des impressions pour les onglets
    document.querySelectorAll(".tab-button[data-pan]").forEach(tabButton => {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    logPanEvent("impression", tabButton);
                    observer.unobserve(entry.target); // Une seule impression par élément
                }
            });
        });
        observer.observe(tabButton);
    });
});
