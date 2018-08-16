var beg = [
  {
    opr_ar: "جمع 10 أعداد وحدات في ثانيتين", // description of the serie
    opr_fr: "addition de 10 nombres de 1 chiffre en 2 secondes", // description of the serie
    opr_en: "addition: 10 numbers of 1 digit in 2 seconds", // description of the serie
    rank1: 1, // rank of the first number
    rank2: 10, // rank of the second number, if addition range of numbers
    speed: 2000, // speed of the operation by ms
    prog: 100, // speed of progress bar 10 -> 1 second
    points: 15 // points won in each serie
  },{
    opr_ar: "جمع 10 أعداد عشرات في 4 ثواني",
    opr_fr: "addition de 10 nombres de 2 chiffres en 4 secondes",
    opr_en: "addition: 10 numbers of 2 digits in 4 seconds",
    rank1: 10,
    rank2: 10,
    speed: 4000,
    prog: 100,
    points: 20
  },{
    opr_ar: "جمع 10 أعداد مئات في 6 ثواني",
    opr_fr: "addition de 10 nombres de 3 chiffres en 6 secondes",
    opr_en: "addition: 10 numbers of 3 digits in 6 seconds",
    rank1: 100,
    rank2: 10,
    speed: 6000,
    prog: 150,
    points: 30
  },{
    opr_ar: "جمع 4 أعداد ملايين في 10 ثواني",
    opr_fr: "addition de 4 nombres de 8 chiffres en 10 secondes",
    opr_en: "addition: 4 numbers of 8 digits in 10 seconds",
    rank1: 10000000,
    rank2: 4,
    speed: 10000,
    prog: 210,
    points: 25
  },{
    opr_ar: "جمع 3 أعداد وحدات في 0.09 ثانية",
    opr_fr: "addition de 3 nombres de 1 chiffre en 0.09 seconde",
    opr_en: "addition: 3 numbers of 1 digit in 0.09 second",
    rank1: 1,
    rank2: 3,
    speed: 90,
    prog: 100,
    points: 10
  }
];
var exp = [
  {
    opr_ar: "جمع 10 أعداد وحدات في ثانية",
    opr_fr: "addition de 10 nombres de 1 chiffre en 1 seconde",
    opr_en: "addition: 10 numbers of 1 digit in 1 second",
    rank1: 1,
    rank2: 10,
    speed: 1000,
    prog: 100,
    points: 2
  },{
    opr_ar: "جمع 10 أعداد وحدات في 0.8 ثانية",
    opr_fr: "addition de 10 nombres de 1 chiffre en 0.8 seconde",
    opr_en: "addition: 10 numbers of 1 digit in 0.8 second",
    rank1: 1,
    rank2: 10,
    speed: 800,
    prog: 100,
    points: 3
  },{
    opr_ar: "جمع 10 أعداد وحدات في 0.6 ثانية",
    opr_fr: "addition de 10 nombres de 1 chiffre en 0.6 seconde",
    opr_en: "addition: 10 numbers of 1 digit in 0.6 second",
    rank1: 1,
    rank2: 10,
    speed: 600,
    prog: 100,
    points: 4
  },{
    opr_ar: "جمع 10 أعداد وحدات في نصف ثانية",
    opr_fr: "addition de 10 nombres de 1 chiffre en 0.5 seconde",
    opr_en: "addition: 10 numbers of 1 digit in 0.5 second",
    rank1: 1,
    rank2: 10,
    speed: 500,
    prog: 100,
    points: 6
  },{
    opr_ar: "جمع 6 أعداد عشرات في ثانيتين",
    opr_fr: "addition de 6 nombres de 2 chiffres en 2 secondes",
    opr_en: "addition: 6 numbers of 2 digits in 2 seconds",
    rank1: 10,
    rank2: 6,
    speed: 2000,
    prog: 100,
    points: 3
  },{
    opr_ar: "جمع 6 أعداد عشرات في ثانية ونصف",
    opr_fr: "addition de 6 nombres de 2 chiffres en 1.5 seconde",
    opr_en: "addition: 6 numbers of 2 digits in 1.5 second",
    rank1: 10,
    rank2: 6,
    speed: 1500,
    prog: 100,
    points: 6
  },{
    opr_ar: "جمع 6 أعداد عشرات في ثانية",
    opr_fr: "addition de 6 nombres de 2 chiffres en 1 seconde",
    opr_en: "addition: 6 numbers of 2 digits in 1 second",
    rank1: 10,
    rank2: 6,
    speed: 1000,
    prog: 100,
    points: 8
  },{
    opr_ar: "جمع 4 أعداد ملايين في 8 ثواني",
    opr_fr: "addition de 4 nombres de 8 chiffres en 8 secondes",
    opr_en: "addition: 4 numbers of 8 digits in 8 seconds",
    rank1: 10000000,
    rank2: 4,
    speed: 8000,
    prog: 210,
    points: 3
  },{
    opr_ar: "جمع 4 أعداد ملايين في 6 ثواني ونصف",
    opr_fr: "addition de 4 nombres de 8 chiffres en 6.5 secondes",
    opr_en: "addition: 4 numbers of 8 digits in 6.5 seconds",
    rank1: 10000000,
    rank2: 4,
    speed: 6500,
    prog: 210,
    points: 6
  },{
    opr_ar: "جمع 4 أعداد ملايين في 5 ثواني",
    opr_fr: "addition de 4 nombres de 8 chiffres en 5 secondes",
    opr_en: "addition: 4 numbers of 8 digits in 5 seconds",
    rank1: 10000000,
    rank2: 4,
    speed: 5000,
    prog: 210,
    points: 8
  },{
    opr_ar: "جمع 3 أعداد وحدات في 0.08 ثانية",
    opr_fr: "addition de 3 nombres de 1 chiffre en 0.08 seconde",
    opr_en: "addition: 3 numbers of 1 digit in 0.08 second",
    rank1: 1,
    rank2: 3,
    speed: 80,
    prog: 100,
    points: 2
  },{
    opr_ar: "طرح مئات من مئات في 13 ثانية",
    opr_fr: "soustraction 3 chiffres de 3 chiffres en 13 secondes",
    opr_en: "subtraction: 3 digits from 3 digits in 13 seconds",
    rank1: 100,
    rank2: 100,
    speed: 13000,
    prog: 150,
    points: 4
  },{
    opr_ar: "طرح آلاف من آلاف في 15 ثانية",
    opr_fr: "soustraction 4 chiffres de 4 chiffres en 15 secondes",
    opr_en: "subtraction: 4 digits from 4 digits in 15 seconds",
    rank1: 1000,
    rank2: 1000,
    speed: 15000,
    prog: 150,
    points: 5
  },{
    opr_ar: "ضرب عشرات في وحدات في 10 ثواني",
    opr_fr: "multiplication 2 chiffres par 1 chiffre en 10 secondes",
    opr_en: "multiplication: 2 digits by 1 digit in 10 seconds",
    rank1: 10,
    rank2: 1,
    speed: 10000,
    prog: 150,
    points: 3
  },{
    opr_ar: "ضرب مئات في وحدات في 12 ثانية",
    opr_fr: "multiplication 3 chiffres par 1 chiffre en 12 secondes",
    opr_en: "multiplication: 3 digits by 1 digit in 12 seconds",
    rank1: 100,
    rank2: 1,
    speed: 12000,
    prog: 150,
    points: 6
  },{
    opr_ar: "ضرب آلاف في وحدات في 13 ثانية",
    opr_fr: "multiplication 4 chiffres par 1 chiffre en 13 secondes",
    opr_en: "multiplication: 4 digits by 1 digit in 13 seconds",
    rank1: 1000,
    rank2: 1,
    speed: 13000,
    prog: 210,
    points: 8
  },{
    opr_ar: "ضرب عشرات في عشرات في 15 ثانية",
    opr_fr: "multiplication 2 chiffres par 2 chiffres en 15 secondes",
    opr_en: "multiplication: 2 digits by 2 digits in 15 seconds",
    rank1: 10,
    rank2: 10,
    speed: 15000,
    prog: 210,
    points: 4
  },{
    opr_ar: "ضرب مئات في عشرات في 18 ثانية",
    opr_fr: "multiplication 3 chiffres par 2 chiffres en 18 secondes",
    opr_en: "multiplication: 3 digits by 2 digits in 18 seconds",
    rank1: 100,
    rank2: 10,
    speed: 18000,
    prog: 210,
    points: 8
  },{
    opr_ar: "ضرب آلاف في عشرات في 20 ثانية",
    opr_fr: "multiplication 4 chiffres par 2 chiffres en 20 secondes",
    opr_en: "multiplication: 4 digits by 2 digits in 20 seconds",
    rank1: 1000,
    rank2: 10,
    speed: 20000,
    prog: 210,
    points: 11
  },
];
