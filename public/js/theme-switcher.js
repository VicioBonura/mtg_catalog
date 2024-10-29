/*!
 * Fork of Pico.css theme switcher
 * Pico.css - https://picocss.com
 * Copyright 2019-2024 - Licensed under MIT
 */

const themeSwitcher = {
    // Config
    _scheme: "auto",
    buttonTarget: "#themeSwitcher",
    buttonAttribute: "data-theme-switcher",
    localStorageKey: "mtgCatalogPreferredColorScheme",
    rootAttribute: "data-theme",
  
    // Init
    init() {
      this.scheme = this.schemeFromLocalStorage;
      this.initSwitchers();
      this.updateIcon();
    },
  
    // Get color scheme from local storage
    get schemeFromLocalStorage() {
      return window.localStorage?.getItem(this.localStorageKey) ?? this._scheme;
    },
  
    // Preferred color scheme
    get preferredColorScheme() {
      return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
    },
  
    // Init switchers
    initSwitchers() {
      const button = document.querySelector(this.buttonTarget);
      button.addEventListener("click", (event) => {
          event.preventDefault();
          // Toggle theme
          this.scheme = this.scheme === "dark" ? "light" : "dark";
          this.updateIcon();
      });
    },
  
    // Set scheme
    set scheme(scheme) {
      if (scheme == "auto") {
        this._scheme = this.preferredColorScheme;
      } else if (scheme == "dark" || scheme == "light") {
        this._scheme = scheme;
      }
      this.applyScheme();
      this.schemeToLocalStorage();
    },
  
    // Get scheme
    get scheme() {
      return this._scheme;
    },
  
    // Apply scheme
    applyScheme() {
      document.querySelector("html")?.setAttribute(this.rootAttribute, this.scheme);
    },
  
    // Store scheme to local storage
    schemeToLocalStorage() {
      window.localStorage?.setItem(this.localStorageKey, this.scheme);
    },

    // Update icon switcher
    updateIcon() {
      const icon = document.querySelector("#themeSwitcher i");
      icon.classList.toggle("bi-brightness-high-fill", this.scheme === "dark");
      icon.classList.toggle("bi-moon-fill", this.scheme === "light");
    }
};
  
// Init
themeSwitcher.init();