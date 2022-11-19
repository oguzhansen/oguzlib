using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class character : MonoBehaviour
{
    public Animator anim;
    public GameObject mainCam;

    void Start()
    {
        
    }

    void Update()
    {
        //Walk
        anim.SetFloat("hiz", Input.GetAxis("Vertical"));

        //Run
        anim.SetBool("run", Input.GetKey(KeyCode.W) && Input.GetKey(KeyCode.LeftShift));

        //Jump
        anim.SetBool("jump", Input.GetKeyDown(KeyCode.Space));


        if (Input.GetKey(KeyCode.S))
        {
            anim.SetFloat("hiz", -1);
            transform.Rotate(0, Input.GetAxis("ReverseHorizontal"), 0);
        }

        if (Input.GetKey(KeyCode.W))
        {
            transform.Rotate(0, Input.GetAxis("Horizontal"), 0);
        }

    }
}
