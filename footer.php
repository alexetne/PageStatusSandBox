</main>
  <footer class="text-center py-4">
    <p class="mb-0">© MySandBox – Tous droits réservés à l’EPSI Toulouse</p>
    <p>Hébergé chez OVH</p>
  </footer>

  <script>
    const themeToggle = document.getElementById("toggle-theme");
    const htmlTag = document.documentElement;
    const logo = document.getElementById("logo");

    function setTheme(mode) {
      htmlTag.setAttribute("data-theme", mode);
      logo.src = mode === "dark" ? "assets/logo_dark.png" : "assets/logo_light.png";
      localStorage.setItem("theme", mode);
    }

    function getCurrentHourTheme() {
      const hour = new Date().getHours();
      return (hour >= 19 || hour < 7) ? "dark" : "light";
    }

    // Initialisation du thème
    const savedTheme = localStorage.getItem("theme");
    setTheme(savedTheme || getCurrentHourTheme());

    themeToggle?.addEventListener("click", () => {
      const newTheme = htmlTag.getAttribute("data-theme") === "dark" ? "light" : "dark";
      setTheme(newTheme);
    });
  </script>
</body>
</html>
