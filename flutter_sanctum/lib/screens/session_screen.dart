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
  Future<List<Session>> getSesstion() async {

    Dio.Response response = await dio().get(
      'user/image',
      options: Dio.Options(
        headers: { 'auth': true }
      )
    );

    List posts = json.decode(response.toString());
    return posts.map((post) => Session.fromJson(post)).toList();
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.amber,
         centerTitle: false,
      title: new Padding(
        padding: const EdgeInsets.only(left: 200.0),
        child: new Text("  الجلسة الأولى" ),
      ),
       
      ),
      body: Center(
          
      ),
    );
  }
}
