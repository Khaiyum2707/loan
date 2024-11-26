document.getElementById('exampleFormControlIC').addEventListener('input', function () {
    const inputField = this;
    const icError = document.getElementById('icError');

    // Check if the input length is not 12
    if (inputField.value.length > 0 && inputField.value.length !== 12) {
        icError.style.display = 'block'; // Show error message
    } else {
        icError.style.display = 'none'; // Hide error message
    }
});

document.querySelector('form').addEventListener('submit', function (event) {
    const inputField = document.getElementById('exampleFormControlIC');
    if (inputField.value.length !== 12) {
        alert('IC Number must be exactly 12 digits.');
        event.preventDefault(); // Prevent form submission
    }
});


document.getElementById('formFileMultiple').addEventListener('change', function () {
    const allowedExtensions = ['pdf'];
    const files = this.files;
    const fileError = document.getElementById('fileError');
    let allValid = true;

    // Check if the number of files is exactly 9
    if (files.length !== 9) {
        fileError.textContent = 'You must upload exactly 9 files.';
        fileError.style.display = 'block';
        alert('You must upload exactly 9 files.');
        this.value = ''; // Clear the input
        return;
    }

    // Validate file types
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const fileExtension = file.name.split('.').pop().toLowerCase();

        if (!allowedExtensions.includes(fileExtension)) {
            allValid = false;
            break;
        }
    }

    if (!allValid) {
        fileError.textContent = 'All uploaded files must be in PDF format.';
        fileError.style.display = 'block';
        alert('All uploaded files must be in PDF format.');
        this.value = ''; // Clear the input
    } else {
        fileError.style.display = 'none'; // Hide error message
    }
});

document.querySelector('form').addEventListener('submit', function (event) {
    const fileInput = document.getElementById('formFileMultiple');
    const fileError = document.getElementById('fileError');

    // Check if the input was cleared due to validation issues
    if (!fileInput.value) {
        event.preventDefault(); // Prevent form submission
        alert('Please upload 9 valid PDF files.');
        fileError.style.display = 'block';
    }
});


// DOM Helper
const $ = document.querySelector.bind(document);

// Application Object
const App = {
    init() {
        // Attach event listeners
        this.attachEventListeners();
    },

    handleFileSelect(evt) {
        const files = evt.target.files; // FileList object

        // Generate file list template
        const template = Array.from(files)
            .map((file, index) => `
        <div class="file file--${index}">
          <div class="name"><span>${file.name}</span></div>
          <div class="progress active"></div>
          <div class="done">
            <a href="#" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000">
                <g>
                  <path d="M500,10C229.4,10,10,229.4,10,500c0,270.6,219.4,490,490,490c270.6,0,490-219.4,490-490C990,229.4,770.6,10,500,10z M500,967.7C241.7,967.7,32.3,758.3,32.3,500C32.3,241.7,241.7,32.3,500,32.3c258.3,0,467.7,209.4,467.7,467.7C967.7,758.3,758.3,967.7,500,967.7z M748.4,325L448,623.1L301.6,477.9c-4.4-4.3-11.4-4.3-15.8,0c-4.4,4.3-4.4,11.3,0,15.6l151.2,150c0.5,1.3,1.4,2.6,2.5,3.7c4.4,4.3,11.4,4.3,15.8,0l308.9-306.5c4.4-4.3,4.4-11.3,0-15.6C759.8,320.7,752.7,320.7,748.4,325z"></path>
                </g>
              </svg>
            </a>
          </div>
        </div>
      `)
            .join("");

        // Update the DOM
        $("#drop").classList.add("hidden");
        $("footer").classList.add("hasFiles");
        $(".importar").classList.add("active");

        // Simulate file processing
        setTimeout(() => {
            $(".list-files").innerHTML = template;

            // Simulate progress
            Array.from(files).forEach((_, index) => {
                const loadTime = 2000 + index * 2000; // Fake load time
                setTimeout(() => {
                    $(`.file--${index}`).querySelector(".progress").classList.remove("active");
                    $(`.file--${index}`).querySelector(".done").classList.add("anim");
                }, loadTime);
            });
        }, 1000);
    },

    attachEventListeners() {
        // Trigger file input
        $("#triggerFile").addEventListener("click", (evt) => {
            evt.preventDefault();
            $("input[type=file]").click();
        });

        // Handle drag-and-drop events
        const dropZone = $("#drop");
        dropZone.ondragleave = (evt) => {
            dropZone.classList.remove("active");
            evt.preventDefault();
        };

        dropZone.ondragover = dropZone.ondragenter = (evt) => {
            dropZone.classList.add("active");
            evt.preventDefault();
        };

        dropZone.ondrop = (evt) => {
            evt.preventDefault();
            $("input[type=file]").files = evt.dataTransfer.files;
            $("footer").classList.add("hasFiles");
            dropZone.classList.remove("active");
        };

        // Handle input file change
        $("input[type=file]").addEventListener("change", this.handleFileSelect.bind(this));

        // Handle "upload more" button
        $(".importar").addEventListener("click", () => {
            $(".list-files").innerHTML = "";
            $("footer").classList.remove("hasFiles");
            $(".importar").classList.remove("active");
            setTimeout(() => {
                $("#drop").classList.remove("hidden");
            }, 500);
        });
    },
};

// Initialize App
App.init();
