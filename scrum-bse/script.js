document.addEventListener('DOMContentLoaded', function() {
    // Dummy bakery data (vervang dit met dynamische data van je server)
    var bakeriesData = [
        { name: "Chocolate Cake", total: "1" },
        { name: "Caramel Cake", total: "8" },
        { name: "Vanilla cake", total: "3" }
        // Voeg meer bakkerij data toe zoals nodig
    ];

    var bakeriesList = document.getElementById('bakeriesList');

    bakeriesData.forEach(function(bakery) {
        var bakeryItem = document.createElement('li');
        bakeryItem.className = 'bakeryItem';
        bakeryItem.innerHTML = '<h2>' + bakery.name + '</h2><p>' + bakery.total + '</p>';
        bakeriesList.appendChild(bakeryItem);
    });

    // Handle form submission
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Hier kun je formuliergegevens verwerken of naar de server sturen
        // Voor deze demo laten we een eenvoudige melding zien
        alert('Formulier ingediend! Bedankt voor uw bericht. Uw bericht zal binnenkort worden beantwoord.');
    });
});