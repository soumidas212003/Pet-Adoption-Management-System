@extends('Layout')

@section('title_nm','Answer These Questions For Adopting Dogesh')

@section('Navbar')
@include('Navbar And Footer.navbar')

@section('Main')
<div class="bg-gradient-to-r from-blue-400 to-purple-500 min-h-screen flex items-center justify-center p-5">

    <div class="bg-white rounded-lg shadow-md w-full sm:w-96 p-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Let's Check How can you take care for Dogesh</h1>
        <div id="quiz">
            <!-- Questions will be inserted here dynamically -->
        </div>
        <button id="submitBtn" class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-8 focus:outline-none focus:ring focus:ring-blue-300">Submit</button>
    </div>
</div>

@section('footer')
@include('Navbar And Footer.footer')

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const questions = [
            {
                question: "What factors influenced your decision to adopt a pet?",
                answers: [
                    { text: "Desire for companionship", correct: "Good" },
                    { text: "To save a life", correct: "Great" },
                    { text: "Recommendation from friends or family", correct: "Not Bad" },
                    { text: "Other", correct: "Worst" }
                ]
            },
            {
                question: "How long did it take you to find the right pet for adoption?",
                answers: [
                    { text: "Less than a week", correct: "Worst" },
                    { text: "1-2 weeks", correct: "Not Bad" },
                    { text: "1-2 months", correct: "Good" },
                    { text: "More than 2 months", correct: "Great" }
                ]
            },
            {
                question: "Have you adopted a pet before?",
                answers: [
                    { text: "Yes", correct: "Not Bad" },
                    { text: "No", correct: "Great" }
                ]
            },
            {
                question: "How satisfied are you with your decision to adopt a pet?",
                answers: [
                    { text: "Extremely satisfied", correct: "Great" },
                    { text: "Somewhat satisfied", correct: "Not Bad" },
                    { text: "Neutral", correct: "Good" },
                    { text: "Dissatisfied", correct: "Worst" }
                ]
            },
            {
                question: "Would you recommend pet adoption to others?",
                answers: [
                    { text: "Yes, definitely", correct: "Great" },
                    { text: "Yes, but with reservations", correct: "Not Bad" },
                    { text: " No, not at all", correct: "Worst" }
                ]
            },
            {
                question: "If your adopted pet begins to relieve itself inside the home, what would be your reaction?",
                answers: [
                    { text: "Patiently train the pet to go outside and clean up the mess calmly.", correct: "Great" },
                    { text: "Get frustrated and scold the pet for misbehaving.", correct: "Worst" },
                    { text: "Seek advice from a veterinarian or animal behaviorist to address the issue.", correct: "Worst" },
                    { text: "Consider returning the pet to the shelter/rescue organization.", correct: "Worst" }
                ]
            },
            {
                question: "Your adopted pet frequently scratches furniture or other household items. How do you respond?",
                answers: [
                    { text: "Provide appropriate scratching posts and redirect the pet's behavior.", correct: "Worst" },
                    { text: "Get upset and discipline the pet.", correct: "Worst" },
                    { text: "Ignore the behavior and hope it stops on its own.", correct: "Great" },
                    { text: "Consider declawing the pet.", correct: "Not Bad" }
                ]
            },
            {
                question: "Your adopted pet exhibits signs of anxiety (e.g., excessive barking, destructive behavior) when left alone. What would you do?",
                answers: [
                    { text: "Gradually acclimate the pet to being alone and seek advice from a professional if needed.", correct: "Good" },
                    { text: "Punish the pet for its behavior.", correct: "Worst" },
                    { text: " Get another pet for companionship.", correct: "Great" },
                    { text: "Rehome the pet.", correct: "Worst" }
                ]
            },
            {
                question: "Your adopted pet is displaying aggression towards other animals or people. How would you handle this situation?",
                answers: [
                    { text: "Consult a professional animal behaviorist for guidance and implement behavior modification techniques.", correct: "Great" },
                    { text: "Punish the pet for its aggressive behavior.", correct: "Worst" },
                    { text: "Avoid situations that trigger aggression.", correct: "Worst" },
                    { text: "Return the pet to the shelter/rescue organization.", correct: "Worst" }
                ]
            },
            {
                question: "Your adopted pet refuses to eat the food provided. How do you address this issue?",
                answers: [
                    { text: "Try offering different types of food to find one the pet enjoys.", correct: "Great" },
                    { text: "Force the pet to eat the food provided.", correct: "Worst" },
                    { text: "Ignore the issue and hope the pet will eventually eat.", correct: "Worst" },
                    { text: "Return the pet to the shelter/rescue organization.", correct: "Worst" }
                ]
            },
        ];

        const quizContainer = document.getElementById('quiz');
        const submitButton = document.getElementById('submitBtn');

        function buildQuiz() {
            questions.forEach((question, index) => {
                const questionElement = document.createElement('div');
                questionElement.classList.add('mb-4');
                questionElement.innerHTML = `
                    <div class="font-semibold">${index + 1}. ${question.question}</div>
                    <div class="mt-2">
                        ${question.answers.map(answer => `
                            <label class="block">
                                <input type="radio" name="question${index}" value="${answer.correct}">
                                <span class="ml-2 text-gray-800">${answer.text}</span>
                            </label>
                        `).join('')}
                    </div>
                `;
                quizContainer.appendChild(questionElement);
            });
        }

        function calculateScore() {
            let score = 0;
            questions.forEach((question, index) => {
                const selectedAnswer = document.querySelector(`input[name="question${index}"]:checked`);
                if (selectedAnswer && selectedAnswer.value === "Great") {
                    score += 10;
                }else if (selectedAnswer && selectedAnswer.value === "Good") {
                    score += 8;
                }else if (selectedAnswer && selectedAnswer.value === "Not Bad") {
                    score += 6;
                }
                else if (selectedAnswer && selectedAnswer.value === "Worst") {
                    score += 2;
                }
            });
            return score;
        }

        submitButton.addEventListener('click', () => {
            const score = calculateScore();
            Swal.fire({
                title: 'Quiz Result',
                text: `Your score is ${score} out of 100`,
                icon: 'info',
                confirmButtonText: 'Close'
            });
        });

        buildQuiz();

        document.addEventListener('DOMContentLoaded', function () {
            const hamburgerMenu = document.getElementById('hamburger-menu');
            const menuOverlay = document.getElementById('menu-overlay');
            const closeMenuButton = document.getElementById('close-menu');

            hamburgerMenu.addEventListener('click', function () {
                menuOverlay.classList.remove('hidden');
            });

            closeMenuButton.addEventListener('click', function () {
                menuOverlay.classList.add('hidden');
            });
        });

    </script>