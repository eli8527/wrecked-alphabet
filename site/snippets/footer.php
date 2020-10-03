<div class="font__preload">
  <span class="font-0"></span>
  <span class="font-1"></span>
  <span class="font-2"></span>
  <span class="font-3"></span>
  <span class="font-4"></span>
  <span class="font-5"></span>
  <span class="font-6"></span>
  <span class="font-7"></span>
  <span class="font-8"></span>
</div>
<script>
  const processDOM = (els) => {
    const span = document.createElement('span');
    span.className = 'font-0';
    span.dataset.fontTransform = '0';
    span.appendChild(document.createTextNode(''));

    // these will display <span> as a literal text per HTML specification
    const skipTags = ['textarea', 'rp'];

    for (const el of els) {
      const walker = document.createTreeWalker(el, NodeFilter.SHOW_TEXT);
      // collect the nodes first because we can't insert new span nodes while walking
      const textNodes = [];
      for (let n; (n = walker.nextNode());) {
        if (n.nodeValue.trim() && !skipTags.includes(n.parentNode.localName)) {
          textNodes.push(n);
        }
      }
      for (const n of textNodes) {
        const fragment = document.createDocumentFragment();
        for (const s of n.nodeValue.split(/(\s+)/)) {
          if (s.trim()) {
            span.firstChild.nodeValue = s;
            fragment.appendChild(span.cloneNode(true));
          } else {
            fragment.appendChild(document.createTextNode(s));
          }
        }
        n.parentNode.replaceChild(fragment, n);
      }
    }
  }

  document.addEventListener('DOMContentLoaded', () => {
    const totalFonts = 9;
    processDOM(document.querySelectorAll('.text-transform p, .navigation__item, .text-transform li'));

    document.querySelectorAll('span[data-font-transform]').forEach((el) => {
      el.addEventListener('mouseover', (e) => {
        const currentIdx = parseInt(el.dataset.fontTransform);
        const nextIdx = (currentIdx + 1) % totalFonts;
        el.dataset.fontTransform = nextIdx;
        el.className = `font-${nextIdx}`;
      })
    })
  });
</script>
</body>
</html>
