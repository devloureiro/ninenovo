(function(){
var button = document.querySelector('.theme-toggle');
if (!button) return;
function getSystemTheme(){ return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'; }
function applyTheme(theme){ document.documentElement.setAttribute('data-theme', theme); }
function saveTheme(value){ try { localStorage.setItem('theme', value); } catch(e) {} }
function getSavedTheme(){ try { return localStorage.getItem('theme'); } catch(e) { return null; } }
function toggleTheme(){
var saved = getSavedTheme() || 'system';
var current = saved === 'system' ? getSystemTheme() : saved;
var next = current === 'dark' ? 'light' : 'dark';
applyTheme(next);
saveTheme(next);
}
button.addEventListener('click', toggleTheme);
})();
