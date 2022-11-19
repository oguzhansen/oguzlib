using UnityEngine;
using System;
using System.Collections;
using System.Collections.Generic;
using Unity.VisualScripting;

public class car : MonoBehaviour
{
    public float hiz, donus;
    
    public WheelCollider arkasag, arkasol, onsag, onsol;
    public Transform arkasagmodel, arkasolmodel, onsagmodel, onsolmodel;

    void Update() 
    {
        arkasag.motorTorque = Input.GetAxis("Vertical") * hiz;
        arkasol.motorTorque = Input.GetAxis("Vertical") * hiz;

        onsol.steerAngle = Input.GetAxis("Horizontal") * donus;
        onsag.steerAngle = Input.GetAxis("Horizontal") * donus;
        wheelmove();
    }

    void wheelmove()
    {
        Vector3 pos;
        Quaternion rot;

        onsol.GetWorldPose(out pos, out rot);
        onsolmodel.position = pos;
        onsolmodel.rotation = rot;

        onsag.GetWorldPose(out pos, out rot);
        onsagmodel.position = pos;
        onsagmodel.rotation = rot;

        arkasag.GetWorldPose(out pos, out rot);
        arkasagmodel.position = pos;
        arkasagmodel.rotation = rot;

        arkasol.GetWorldPose(out pos, out rot);
        arkasolmodel.position = pos;
        arkasolmodel.rotation = rot;
    }
}