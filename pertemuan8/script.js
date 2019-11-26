document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, {
      direction: 'top'
    });
  });

var instance = M.FloatingActionButton.getInstance(elem);
instance.open();
instance.close();

