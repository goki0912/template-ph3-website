function showAnswer(element) {
  var answer = element.getAttribute('data-answer');
  var answerSpan = element.parentNode.querySelector('.answer');
  if (!answerSpan) {
      answerSpan = document.createElement('span');
      answerSpan.className = 'answer';
      element.parentNode.appendChild(answerSpan);
  }
  answerSpan.textContent = answer;
}
