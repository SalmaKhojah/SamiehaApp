import 'dart:developer';

import 'package:flutter/material.dart';
import 'package:flutter_sanctum/providers/auth.dart';
import 'package:provider/provider.dart';
import 'package:form_validator/form_validator.dart';
 
class LoginScreen extends StatefulWidget {

  @override
  State<StatefulWidget> createState() {
    return LoginState();
  }

}

class LoginState extends State<LoginScreen> {
  final _formKey = GlobalKey<FormState>();
  String _email;
  String _password;

  void submit () {
    Provider.of<Auth>(context, listen: false).login(
        credentials: {
          'email': _email,
          'password': _password,
        }
    );

    Navigator.pop(context);
  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: new Padding(
        padding: const EdgeInsets.only(left: 200.0),
        child: new Text("تسجيل الدخول"),
      ),
      ),
      body: Form(
        //to vslidate input
        autovalidateMode: AutovalidateMode.onUserInteraction,
        key: _formKey,
        child: Scrollbar(
          child: SingleChildScrollView(
            padding: EdgeInsets.all(16),
            child: Column(
              children: [
                TextFormField(
                textAlign: TextAlign.right,
                  initialValue: '',
                  decoration: InputDecoration(
                    labelText: 'البريد الإلكتروني',
                    hintText: 'email@email.com'
                  ),
                  
                   validator: (value) {
                     if (value.isEmpty) {
                       return 'أدخل البريد الإلكتروني';
                    } else  {
                      bool emailValid = RegExp(r"^[a-zA-Z0-9.a-zA-Z0-9.!#$%&'*+-/=?^_`{|}~]+@[a-zA-Z0-9]+\.[a-zA-Z]+").hasMatch(value);

                    if (!emailValid) {
                       return 'أدخل البريد الإلكتروني بشكل صحيح';
                    }
                  }
                    return null;
                  },
                  onSaved: (value) {
                    _email = value;
                  },
                  /*validator:(value){
                   if(value!.isEmpty || !RegExp(r'^[a-z A-Z]+$').hasMatch(value!)){
                    return "Enter correct name";
                  }else{
                    return null;
                  }
                  },*/

                ),
                TextFormField(
                 textAlign: TextAlign.right,
                  initialValue: '',
                  decoration: InputDecoration(
                      labelText: 'كلمة المرور',
                      hintText: 'أدخل كلمة المرور'
                  ),
                  validator: (value) {
                    if (value.isEmpty) {
                       return 'أدخل كلمة المرور';
                    }
                  },
                  onSaved: (value) {
                    _password = value;
                  },
                ),
                SizedBox(
                  width: double.infinity,
                  child: ElevatedButton(
                    child: Text('تسجيل الدخول'),
                    onPressed: () {
                     final isValidForm = _formKey.currentState.validate();
                    if(isValidForm){
                      _formKey.currentState.save();
                        this.submit();
                    }
                    },
                  ),
                )

              ],
            ),
          ),
        ),

      )
    );
  }
}
