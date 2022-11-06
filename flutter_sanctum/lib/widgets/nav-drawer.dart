import 'package:flutter/material.dart';
import 'package:flutter_sanctum/providers/auth.dart';
import 'package:flutter_sanctum/screens/login-screen.dart';
import 'package:flutter_sanctum/screens/posts-screen.dart';
import 'package:flutter_sanctum/screens/session_screen.dart';
import 'package:flutter_sanctum/screens/profile-screen.dart';

import 'package:provider/provider.dart';

class NavDrawer extends StatelessWidget {

  @override
  Widget build(BuildContext context) {
    return Drawer(
      child: Consumer<Auth> (
        builder: (context, auth, child) {
          if (auth.authenticated) {
            return ListView(
              children: [
                ListTile(
                  title: Text(auth.user.name),
                ),
                ListTile(
                  title: Text('الجلسات'),
                  onTap: () {
                    Navigator.push(context, MaterialPageRoute(builder: (context) => PostsScreen()));
                  },
                ),
                ListTile(
                  title: Text('البيانات الشخصية'),
                  onTap: () {
                    Navigator.push(context, MaterialPageRoute(builder: (context) => ProfileScreen()));
                  },
                ),
                ListTile(
                  title: Text('تسجيل الخروج'),
                  onTap: () {
                    Provider.of<Auth>(context, listen: false).logout();
                  },
                )
              ],
            );

          } else {
            return ListView(
              children: [
                ListTile(
                  title: Text('تسجيل الدخول'),
                  onTap: () {
                    Navigator.push(context, MaterialPageRoute(builder: (context) => LoginScreen()));
                  },
                ),
                ListTile(
                  title: Text(''),
                  onTap: () {
                    Navigator.push(context, MaterialPageRoute(builder: (context) => LoginScreen()));
                  },
                )
              ],
            );

          }
        }

      ),
    );
  }
}