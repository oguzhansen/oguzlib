using System;
using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class carinout : MonoBehaviour
{
    car carsc;

    public bool aracta;

    public GameObject carcam;
    public GameObject charcam;
    GameObject character;
    public GameObject care;
    public GameObject charpos;

    KeyCode enterExit = KeyCode.F;



    void Start()
    {
        carsc = GetComponent<car>();
        carsc.enabled = false;
        carcam.SetActive(false);
        care.SetActive(false);
        aracta = false;
    }

    void Update()
    {
        if (aracta == true && Input.GetKey(KeyCode.E))
        {
            aracta = false;
            care.SetActive(true);
            character.SetActive(true);
            charcam.SetActive(true);
            carsc.enabled = false;
            carcam.SetActive(false);
            character.transform.position = charpos.transform.position;
        }
    }

    void OnTriggerStay(Collider nesne)
    {
        if (nesne.gameObject.tag == "Player" && aracta == false)
        {
            care.SetActive(true);
            character = nesne.gameObject;
            
            if (Input.GetKey(enterExit))
            {
                aracta = true;
                charcam.SetActive(false);
                care.SetActive(false);
                character.SetActive(false);
                carsc.enabled = true;
                carcam.SetActive(true);
            }
        }
    }

    private void OnTriggerExit(Collider nesne)
    {
         care.SetActive(false);
    }
}
