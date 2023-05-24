const links = document.querySelectorAll('.wrapper .sidebar a');

links.forEach(link => {
  link.addEventListener('click', function() {
    links.forEach(link => link.classList.remove('active'));
    this.classList.add('active');
  });
});

// Get references to the <a> elements and content divs
const link1 = document.getElementById('link1');
const link2 = document.getElementById('link2');
const content1 = document.getElementById('content1');
const content2 = document.getElementById('content2');
const content3 = document.getElementById('content3');
const content4 = document.getElementById('content4');


// Add click event listeners to the <a> elements
link1.addEventListener('click', () => {
  // Hide all content divs
  content1.style.display = 'block';
  content2.style.display = 'none';
  content3.style.display = 'none';
  content4.style.display = 'none';
});

link2.addEventListener('click', () => {
  // Hide all content divs
  content1.style.display = 'none';
  content2.style.display = 'block';
  content3.style.display = 'none';
  content4.style.display = 'none';
});

link3.addEventListener('click', () => {
  // Hide all content divs
  content1.style.display = 'none';
  content2.style.display = 'none';
  content3.style.display = 'block';
  content4.style.display = 'none';
});

link4.addEventListener('click', () => {
    // Hide all content divs
    content1.style.display = 'none';
    content2.style.display = 'none';
    content3.style.display = 'none';
    content4.style.display = 'block';
  });

