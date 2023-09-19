document.addEventListener('DOMContentLoaded', function (){
    // Get references to the elements
    const showHamburgerIcon = document.getElementById('show-menu');
    const hideHamburgerIcon = document.getElementById('hide-menu');
    const menu = document.getElementById('dropdown-menu');

    // Function to show the menu
    function showMenu() {
        menu.style.display = 'block';
        showHamburgerIcon.style.display = 'none';
        hideHamburgerIcon.style.display = 'block';
    }

    // Function to hide the menu
    function hideMenu() {
        menu.style.display = 'none';
        hideHamburgerIcon.style.display = 'none';
        showHamburgerIcon.style.display = 'block';
    }

    // Add event listeners to the hamburger icons
    if (showHamburgerIcon || hideHamburgerIcon) {
        showHamburgerIcon.addEventListener('click', showMenu);
        hideHamburgerIcon.addEventListener('click', hideMenu);
    }

    setInits();
});

/**
 * Main Javascript functions
 */

// initialization properties
let form = {
    title: "Writer's Choice",
    academic_level_id: 2,
    subject_id: 1,
    service_type_id: 1,
    deadline: 336,
    pages: 1,
    slides: 0,
    sources: 1,
    instructions: '',
    referencing_style_id: 1,
    spacing_id: 1,
    writer_category_id: 1,
    discount_id: '',
    currency_id: 2,
    language_id: 1, extra: '',
    files: [],
    amount: 9.99,
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
}

let rates = [
    {
        "id": 1,
        "name": "3 hours",
        "hours": 3,
        "amount": "35.00"
    },
    {
        "id": 2,
        "name": "6 hours",
        "hours": 6,
        "amount": "33.00"
    },
    {
        "id": 3,
        "name": "12 hours",
        "hours": 12,
        "amount": "31.50"
    },
    {
        "id": 4,
        "name": "18 hours",
        "hours": 18,
        "amount": "29.99"
    },
    {
        "id": 5,
        "name": "24 hours",
        "hours": 24,
        "amount": "28.00"
    },
    {
        "id": 10,
        "name": "2 days",
        "hours": 48,
        "amount": "22.50"
    },
    {
        "id": 11,
        "name": "7 days",
        "hours": 168,
        "amount": "18.00"
    },
    {
        "id": 12,
        "name": "10 days",
        "hours": 240,
        "amount": "16.50"
    },
    {
        "id": 13,
        "name": "14 days",
        "hours": 336,
        "amount": "14.00"
    },
    {
        "id": 14,
        "name": "30 days",
        "hours": 720,
        "amount": "10.00"
    }
];
let services = [
    {
        "id": 1,
        "name": "Essay Writing Service",
        "rate": 0
    },
    {
        "id": 2,
        "name": "Coursework",
        "rate": 0
    },
    {
        "id": 3,
        "name": "Term Paper Writing",
        "rate": 0
    },
    {
        "id": 4,
        "name": "Research Paper",
        "rate": 0
    },
    {
        "id": 5,
        "name": "Power Point Presentation",
        "rate": -20
    },
    {
        "id": 6,
        "name": "Discussion Post Writing",
        "rate": 0
    },
    {
        "id": 7,
        "name": "Discussion Board Response",
        "rate": 0
    },
    {
        "id": 8,
        "name": "Discussion Board",
        "rate": 0
    },
    {
        "id": 9,
        "name": "Classwork",
        "rate": 0
    },
    {
        "id": 10,
        "name": "Annotated Bibliography",
        "rate": 0
    },
    {
        "id": 11,
        "name": "Report Writing",
        "rate": 10
    },
    {
        "id": 12,
        "name": "Capstone Project",
        "rate": 0
    },
    {
        "id": 13,
        "name": "Admission Essay",
        "rate": 0
    },
    {
        "id": 14,
        "name": "Personal Statement",
        "rate": 0
    },
    {
        "id": 15,
        "name": "College Essay",
        "rate": 0
    },
    {
        "id": 16,
        "name": "Speech Writing",
        "rate": 0
    },
    {
        "id": 17,
        "name": "Book Review",
        "rate": 0
    },
    {
        "id": 18,
        "name": "Movie Review",
        "rate": 0
    },
    {
        "id": 19,
        "name": "Article Review/Critique",
        "rate": 0
    },
    {
        "id": 20,
        "name": "Thesis Writing",
        "rate": 10
    },
    {
        "id": 21,
        "name": "Dissertation Writing Service",
        "rate": 15
    },
    {
        "id": 22,
        "name": "Dissertation - CHAPTER 1 Writing",
        "rate": 0
    },
    {
        "id": 23,
        "name": "Dissertation - CHAPTER 2 Literature Review Writing",
        "rate": 5
    },
    {
        "id": 24,
        "name": "Dissertation - CHAPTER 3 Methodology",
        "rate": 0
    },
    {
        "id": 25,
        "name": "Dissertation - CHAPTER 4 Results",
        "rate": 5
    },
    {
        "id": 26,
        "name": "Dissertation - CHAPTER 5 Discussion",
        "rate": 5
    },
    {
        "id": 27,
        "name": "Case Study Writing",
        "rate": 5
    },
    {
        "id": 28,
        "name": "Create Brochure",
        "rate": 0
    }
];
let levels = [
    {
        "id": 6,
        "name": "Personal",
        "rate": 5
    },
    {
        "id": 7,
        "name": "Professional",
        "rate": 15
    },
    {
        "id": 1,
        "name": "High School",
        "rate": 0
    },
    {
        "id": 2,
        "name": "College",
        "rate": 0
    },
    {
        "id": 3,
        "name": "Undergraduate/University",
        "rate": 10
    },
    {
        "id": 4,
        "name": "Masters",
        "rate": 20
    },
    {
        "id": 5,
        "name": "Ph.D.",
        "rate": 30
    }
];

let baseRate = 0.00;
let levelRate = 0.00;
let serviceRate = 0.00;


function getPrice() {
    baseRate = rates.find(rate => rate.hours === parseInt(form.deadline));

    let total = parseInt(baseRate.amount) ?? 0;

    levelRate = levels.find(level => level.id === parseInt(form.academic_level_id)).rate ?? 0;

    serviceRate = services.find( service => service.id === parseInt(form.service_type_id) ).rate ?? 0;

    let rateTotal = total + total*(levelRate/100) + total*(serviceRate/100);

    let slides = parseInt(form.slides);

    total = (rateTotal * parseInt(form.pages)) + (rateTotal * slides);

    form.amount = (Math.round(total * 100)/ 100).toFixed(2);
}

function setInits() {
    form.service_type_id = parseInt(document.getElementById('service_type').value);

    form.academic_level_id = parseInt(document.getElementById('level').value);
    form.deadline = parseInt(document.getElementById('deadline').value);
    form.pages = parseInt(document.getElementById('pages').value);

    getPrice();




     // Set the new price value
    document.getElementById('amount').innerText = form.amount;
}


// save subform's order to localStorage before redirecting to the full order form
function saveSubForm() {
    setInits();
    localStorage.setItem('newOrder', JSON.stringify(form));
    window.location.href='/orders/new';
}

const csv_file = document.getElementById('csv_file');
const uploadBtn = document.getElementById('upload-btn');

uploadBtn.addEventListener('click', async () => {
    const file = csv_file.files[0];
    const formData = new FormData();
    formData.append('csv_file', file);

    await fetch('http://localhost:8888/api/questions', {
        method: "POST",
        body: formData
    }).then((response) => { return response.json()}).then(
        (res) => {
            console.log('response: ', JSON.stringify(res));
            try {
                if (res.success) {
                    console.log('Success message: ', res.messages[1]);
                }

                console.log("Server error: ", res.statusCode);
                console.log("Error details: ", res.message);
            } catch (error) {
                console.log("Error: ", error)
            }
        }
    );
});

const jsonData =
    [
        {
            "title": "Literary Analysis - Themes in Classic Novels",
            "body": "Choose two classic novels that we've studied this semester and analyze the prominent themes present in each of them. How do these themes reflect the time period in which the novels were written? Provide specific examples from the texts to support your analysis. Compare and contrast the themes across the two novels, discussing their similarities and differences. In your responses to peers, engage in discussions about the significance of the themes and whether they resonate differently in today's context.\nRemember to provide textual evidence and critical insights to support your arguments.",
            "category": "Literature",
            "tag": "Literary Analysis"
        },
        {
            "title": "Math Problem Solving - Real-World Applications",
            "body": "Choose a real-world problem that can be solved using mathematical concepts we've learned in class. Describe the problem, present the mathematical equations or models that can be used to solve it, and provide step-by-step solutions. Explain the significance of your solution in the context of the original problem. In your responses to peers, discuss the validity of their approaches and propose alternative methods of solving the same problem.",
            "category": "Mathematics",
            "tag": "Problem Solving"
        },
        {
            "title": "Historical Debates - Causes of a Significant Event",
            "body": "Choose a significant historical event and explore the various interpretations and debates regarding its causes. Analyze the differing viewpoints presented by historians, considering political, social, economic, and cultural factors. Support your analysis with citations from reputable historical sources. Engage with your peers by providing counterarguments to their interpretations and suggesting additional sources that could enhance their understanding of the event's causes.",
            "category": "History",
            "tag": "Historical Analysis"
        },
        {
            "title": "Scientific Inquiry - Environmental Impact Study",
            "body": "Conduct an environmental impact study on a local ecosystem that has undergone significant changes due to human activity. Describe the ecosystem, the changes that have occurred, and the potential ecological consequences. Use scientific data and research to assess the short-term and long-term impacts. Discuss possible mitigation strategies and their feasibility. When responding to peers, evaluate the effectiveness of their proposed solutions and offer additional insights based on scientific principles.",
            "category": "Science",
            "tag": "Environmental Science"
        },
        {
            "title": "Language Learning - Cross-Cultural Communication",
            "body": "Choose a foreign culture and language that you're studying. Investigate the cultural nuances that impact communication in this culture. Compare and contrast these nuances with your own culture's communication style. Provide examples of potential misinterpretations or challenges that might arise in cross-cultural interactions. In your responses to classmates, share personal anecdotes related to cross-cultural communication and offer strategies for effective intercultural dialogue.",
            "category": "Languages",
            "tag": "Cross-Cultural Communication"
        }
    ];


const jsonBtn = document.getElementById('json-endpoint');

jsonBtn.addEventListener('click', async () => {
    try {
        const response = await fetch('http://localhost:8888/api/json-ep', {
            headers: {
                'Content-Type': 'application/json'
            },
            method: 'POST',
            body: JSON.stringify(jsonData),
        })

        if (response.ok) {
            console.log('Data sent successfully. Status: ', response.status);

            console.log('Body: ', JSON.stringify(response.body));
        }

    } catch (error) {
        console.log('An error occurred: ', error)
    }
})

document.addEventListener('DOMContentLoaded', () => {
    const textArea = document.getElementById('site-excerpt');
    const counter = document.getElementById('textarea-counter');
    const limit = 160;

    textArea.addEventListener('input', () => {
        const currentLength = textArea.value.length;

        if (currentLength <= limit) {
            // Update the counter with the current character count
            counter.textContent = `${currentLength}/${limit}`;
            // Remove any previous red styling
            textArea.style.color = 'black';
        } else {
            // Display the character count in red
            counter.textContent = `${currentLength}/${limit}`;
            // Apply red styling to the exceeded characters
            textArea.style.color = 'red';
        }
    });
})
