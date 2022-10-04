import 'dart:convert';
import 'dart:developer';

import 'package:flutter/material.dart';
import 'package:flutter_sanctum/models/session.dart';
import 'package:dio/dio.dart' as Dio;

import '../dio.dart';

class SessionScreen extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return SessionState();
  }
}

class SessionState extends State<SessionScreen> {
  Future<List<Session>> getSessions() async {

    Dio.Response response = await dio().get(
      'user/image',
      options: Dio.Options(
        headers: { 'auth': true }
      )
    );

    List sessions = json.decode(response.toString());
    return sessions.map((session) => Session.fromJson(session)).toList();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
         backgroundColor: Colors.amber,
          centerTitle: false,
      title: new Padding(
        padding: const EdgeInsets.only(left: 240.0),
        child: new Text("الجلسة-1"),
      ),

      ),
      body: Center(
          child: FutureBuilder<List<Session>> (
            future: getSessions(),
            builder: (context, snapshot) {
              if (snapshot.hasData) {

                return ListView.builder(
                    itemCount: snapshot.data.length,
                    itemBuilder: (context, index) {
                      var item = snapshot.data[index];

                      return ListTile(
                        title: Text(item.image),
                      );
                    }

                );


              } else if (snapshot.hasError) {
                return Text('لا توجد عناصر متاحة');
              }

              return CircularProgressIndicator();
            }
          )
      ),
    );
  }
}
