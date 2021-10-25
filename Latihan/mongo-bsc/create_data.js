const mongoose = require("mongoose");

mongoose.connect("mongodb://localhost:27017/db-mongoose", {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

const fruitSchema = new mongoose.Schema({
  name: String,
  rating: Number,
  review: String,
});

const Fruit = mongoose.model("Fruit", fruitSchema);

const apple = new Fruit({
  name: "Apple",
  rating: 8,
  review: "Manis",
});

apple.save(function (error) {
  if (error) {
    console.log(error);
  } else {
    console.log("berhasil simpan buah apel");
  }
});
