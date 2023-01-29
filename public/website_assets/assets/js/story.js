var timestamp = function () {
  var timeIndex = 0;
  var shifts = [
    35,
    60,
    60 * 3,
    60 * 60 * 2,
    60 * 60 * 25,
    60 * 60 * 24 * 4,
    60 * 60 * 24 * 10,
  ];

  var now = new Date();
  var shift = shifts[timeIndex++] || 0;
  var date = new Date(now - shift * 1000);

  return date.getTime() / 1000;
};

var currentSkin = {
  name: "FaceSnap",
  params: {
    avatars: true,
    list: false,
    autoFullScreen: true,
    cubeEffect: false,
    paginationArrows: true,
  },
};
