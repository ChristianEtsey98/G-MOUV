class Question {
    constructor(text, choices, answer) {
      this.text = text;
      this.choices = choices;
      this.answer = answer;
    }
    isCorrectAnswer(choice) {
      return this.answer === choice;
    }
  }


  let questions = [
    new Question("L'environnement, c'est :", ["La forêt", "Tout ce qui m'entoure", "L'air", "L'océan"], "Tout ce qui m'entoure"),
    new Question("Le climat désigne :", ["Les conditions de l'atmosphère dans une région et une période donnée","L'étude du temps", "L'analyse des fréquences", "La pluie"], "Les conditions de l'atmosphère dans une région et une période donnée"),
    new Question("La mer est-elle un écosystème ?", ["Oui","Non", "Peut-être", "Je ne sais pas"], "Oui"),
    new Question("La pollution désigne :", ["La dégradation de l'environnement par des substances/nuisances diverses","Le sol qui craque sous nos pieds", "L'érosion", "Les tremblements de terre"], "La dégradation de l'environnement par des substances/nuisances diverses"),
    new Question("Quelle est l’une des conséquences probables du réchauffement climatique ?", ["Pas de conséquences majeures, il fera juste un peu plus chaud ","Elévation du niveau des océans", "X", "X"], "Elévation du niveau des océans"),
    new Question("Les scientifiques utilisent le terme d’ « effet de serre » pour décrire : ", ["La capacité de certains gaz à retenir la chaleur","Une méthode d'agriculture", "Un trou dans la couche d’ozone qui permet à plus de rayons du soleil d’arriver au sol", "X"], "La capacité de certains gaz à retenir la chaleur"),
    new Question("Parmi ces types d'énergie, laquelle est dite renouvelable ?", ["Gaz","Pétrole", "Soleil", "Uranium"], "Soleil"),
    new Question("Lequel de ces gaz produits N'EST PAS un gaz à effet de serre ?", ["Dioxyde de carbone","Oxygène", "Monoxyde de dihydrogène", "Protoxyde d'azote"], "Oxygène"),
    new Question("En 2007, combien de tonnes annuelles de C02 étaient émises par un français (gaz à effet de serre) ?", ["50 T","1,2 T", "5,8 T", "12T"], "5,8 T"),
    new Question("Quel le plus grand gaz à effet de serre ? ", ["Dioxyde de carbone","Vapeurs d'eau", "méthane", "Oxygène"], "Vapeurs d'eau"),
    new Question("Quel est le taux de dioxyde de carbon dans l’atmosphère terrestre ? ", ["Entre 30 et 40 %","Environ 12 %", "Moins de 0,1 %", "7% exactement"], "Moins de 0,1 %"),
    new Question("Où part la majorité du dioxyde de carbone émis par l’Homme ? ", ["Dans l'atmosphère","Dans l'océan", "Dans l'espace", "L'homme n'émet pas de dioxyde de carbone"], "Dans l'atmosphère"),
    new Question("Parmi les propositions suivantes, quelle est celle qui perd le plus de glace tous les ans ?", ["Le Mont Blanc","L'Antarctique", "L'Himalaya", "Le Groënland"], "Le Groënland"),
    new Question("Au cours des 35 dernières années, la surface de la banquise a :", ["Diminuée de 50 %","Diminuée de 2 %", "Diminuée de 30 %", "Augmentée de 10%"], "Diminuée de 50 %"),
    new Question("Lequel de ces pays émet le plus de gaz à effet de serre ?", ["La Chine","Les Etats-Unis", "Le Brésil", "L'Arabie Saoudite"], "Les Etats-Unis"),
    new Question("Quel pays a le plus d'émissions de gaz à effet de serre par habitant ?", ["Le Japon","La Norvège", "L'Australie", "Les Etats-Unis"], "L'Australie"),
    new Question("Dans le monde, le secteur du transport est responsable d'une certaine quantité d'émissions totales de gaz à effet de serre. Mais combien ?", ["1%","14%", "30%", "80%"], "14%"),
    new Question("Quand la température moyenne sur Terre augmente...", ["Il pleut plus","Il pleut moins", "Le taux de précipitation est inchangé", "Il ne pleut plus"], "Il pleut plus")
  ];
  
  console.log(questions);
  
  class Quiz {
    constructor(questions) {
      this.score = 0;
      this.questions = questions;
      this.currentQuestionIndex = 0;
    }
    getCurrentQuestion() {
      return this.questions[this.currentQuestionIndex];
    }
    guess(answer) {
      if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
        this.score++;
      }
      this.currentQuestionIndex++;
    }
    hasEnded() {
      return this.currentQuestionIndex >= this.questions.length;
    }
  }


  // Regroup all  functions relative to the App Display
  const display = {
    elementShown: function(id, text) {
      let element = document.getElementById(id);
      element.innerHTML = text;
    },
    endQuiz: function() {
      endQuizHTML = `
      <h1>Quiz terminé !</h1>
      <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>
      <br><br><br><br><br><br>
      <h4><a href="résultats.html">Cliquez ici pour voir le détail de vos résultats</a></h4>`;
    this.elementShown("quiz", endQuizHTML);
  },
    question: function() {
      this.elementShown("question", quiz.getCurrentQuestion().text);
    },
    choices: function() {
      let choices = quiz.getCurrentQuestion().choices;
  
      guessHandler = (id, guess) => {
        document.getElementById(id).onclick = function() {
          quiz.guess(guess);
          quizApp();
        }
      }


      // display choices and handle guess
      for(let i = 0; i < choices.length; i++) {
        this.elementShown("choice" + i, choices[i]);
        guessHandler("guess" + i, choices[i]);
      }
    },
    progress: function() {
      let currentQuestionNumber = quiz.currentQuestionIndex + 1;
      this.elementShown("progress", "Question " + currentQuestionNumber + " sur " + quiz.questions.length);
    },
  };
  
  // Game logic
  quizApp = () => {
    if (quiz.hasEnded()) {
      display.endQuiz();
    } else {
      display.question();
      display.choices();
      display.progress();
    } 
  }
  // Create Quiz
  let quiz = new Quiz(questions);
  quizApp();
  
  console.log(quiz);