import hljs from 'highlight.js';

window.addEventListener('load', function() {
    document
        .querySelectorAll('pre > code.code')
        .forEach(block => hljs.highlightElement(block));
});