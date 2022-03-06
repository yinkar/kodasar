require("./bootstrap");

window.addEventListener('load', function() {
    if (
        localStorage.theme === "dark" ||
        (!("theme" in localStorage) &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        document.documentElement.classList.add("dark");
    } else {
        document.documentElement.classList.remove("dark");
    }
    const toLight = document.querySelector('#to-light');
    const toDark = document.querySelector('#to-dark');
    
    if (localStorage.theme === 'dark') {
        toLight.classList.remove('hidden');
        toLight.classList.add('block');
    }
    else {
        toDark.classList.remove('hidden');
        toDark.classList.add('block');
    }

    toDark.addEventListener('click', () => {
        localStorage.theme = 'dark';
        window.location.reload();
    });

    toLight.addEventListener('click', () => {
        localStorage.theme = 'light';
        window.location.reload();
    });
});