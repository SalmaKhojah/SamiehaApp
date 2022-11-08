class User {
  int id;
  String name;
  String email;
  String phone;
  String diagnosis;
  String slp_name;
  String slp_email;


  User({ this.id, this.name, this.email,this.phone,this.diagnosis,this.slp_name,this.slp_email });

  factory User.fromJson(Map<String, dynamic> json) {
    return User(
      id: json['id'],
      name: json['name'],
      email: json['email'],
      phone: json['phone'],
      diagnosis: json['diagnosis'],
      slp_name: json['slp_name'],
      slp_email: json['slp_email'],

    );

  }

}