class Session {
  int id;
  String image;

  Session({ this.id, this.image });

  factory Session.fromJson(Map<String, dynamic> json) {
    return Session(
      id: json['id'],
      image: json['image'],
    );

  }

}