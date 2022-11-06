import 'dart:developer';

import 'package:flutter/material.dart';
import 'package:provider/provider.dart';
import 'package:form_validator/form_validator.dart';
import 'package:flutter_secure_storage/flutter_secure_storage.dart';
import 'package:flutter_sanctum/providers/auth.dart';


 
class ProfileScreen extends StatefulWidget {

  @override
  State<StatefulWidget> createState() {
    return ProfileState();
  }

}
//obscureText: true,
class _MyTextStyle {
  static final style1 = TextStyle(
    fontSize: 16
  );
}
class ProfileState extends State<ProfileScreen> {
  final _formKey = GlobalKey<FormState>();



  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: new Padding(
        padding: const EdgeInsets.only(left: 200.0),
        child: new Text("البيانات الشخصية"),
      ),
      ),
    //   body: Center(
    //       // child:Text(auth.user.name),
    //   ),
    // );

    // return Scaffold(
    //   appBar: AppBar(
    //     title: Text(widget.title),
    //   ),
      body: Center(
          child: Consumer<Auth>(
            builder: (context, auth, child) {
                return Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  mainAxisSize: MainAxisSize.min,
                  children:
                  <Widget>[
                    Image.asset(
                      'Asset/profile.png',
                      width: 120,
                    ),
                    SizedBox( height: 25 ,),

                    Text('الاسم:   '+auth.user.name ,  textDirection: TextDirection.rtl,
                      textAlign: TextAlign.right,style: _MyTextStyle.style1),
                    Text('البريد:   '+auth.user.email,  textDirection: TextDirection.rtl,
                        textAlign: TextAlign.right,style: _MyTextStyle.style1),
                    Text('الهاتف:   '+auth.user.phone,  textDirection: TextDirection.rtl,
                        textAlign: TextAlign.right,style: _MyTextStyle.style1),
                    Text('التشخيص:   '+auth.user.diagnosis,  textDirection: TextDirection.rtl,
                        textAlign: TextAlign.right,style: _MyTextStyle.style1),
                    SizedBox( height: 30 ,),
                    Image.asset(
                      'Asset/doc.png',
                      width: 120,
                    ),
                    SizedBox( height: 25 ,),

                    Text(' الاختصاصي: '+auth.user.slp_name,  textDirection: TextDirection.rtl,
                        textAlign: TextAlign.right,style: _MyTextStyle.style1),
                    Text('بريد الاختصاصي: '+auth.user.slp_email,  textDirection: TextDirection.rtl,
                        textAlign: TextAlign.right,style: _MyTextStyle.style1),


                    // Text('Rochambeau!', style: DefaultTextStyle.of(context).style.apply(fontSizeFactor: 2.0)),
                  ],
                );Text(auth.user.name +' مرحبا بك ');

            },
          )
      ),
    );
  }
}
